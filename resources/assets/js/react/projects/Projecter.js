import Tasker from './Tasker';
import ProjectTitle from './ProjectTitle';
import ProjectCommand from './ProjectCommand';
import ObjectToArray from './ObjectToArray';


var Projecter = React.createClass({

    getInitialState: function () {
        var projectCollections = new ProjectCommand();

        // LISTENING to Project Events
        socket.on(['newProjectConversation'], function (message) {
            console.log('This is newProjectConversation caught by socket in Projecter.js  :', message[1]);
            this.addConversation(message);
            $.niftyNoty({type: 'info', message: message[1]['id'], container: 'floating', closeBtn: true, timer: 4000});
        }.bind(this))
            .on(['newProjectMessage'], function (message) {
            console.log('This is newProjectMessage caught by socket in Projecter.js  :', message);
            this.addMessage(message);
            $.niftyNoty({type: 'info', message: message[1]['id'], container: 'floating', closeBtn: true, timer: 4000});
        }.bind(this))
            .on(['projectMessageChange'], function (message) {
                this.updateMessage({ message });
        }.bind(this))
            .on(['projectConversationChange'], function (conversation) {
                console.log('This is projectConversationChange caught by socket in Projecter.js  : ', conversation);
                this.updateConversation(conversation);
        }.bind(this));

        var projectArray = new ObjectToArray(projectCollections.projects);
        //console.log('THIS IS IN PROJECTER >> >> >> ',   projects);

        return {
            projectArray:  projectArray,
            users: projectCollections.users,
            projects:  projectCollections.projects,
            conversations: projectCollections.conversations
        };
    },
    addConversation: function (message)
    {
        var addToProjects = this.state.projects[message[1].owner_id].conversations[message[1].id] = message[1];
        var addToConversations = this.state.conversations[message[1].id] = message[1];
        //console.log('THIS IS IN PROJECTER>> >> >> ', addToConversations);
        var projectArray = new ObjectToArray(this.state.projects);
        var projects = this.state.projects;
        var conversations = this.state.conversations;
        this.setState({ projectArray, projects, conversations });

        //console.log('Projector.js -> addConversation id ',message[1].id, ' added to this project ', this.state.projects[message[1].project_id]);
    },
    updateConversation: function (conversation)
    {
        console.log('THIS IS IN PROJECTER>> >> >> ', conversation.id);
        var project_id = this.state.conversations[conversation.id].owner_id;
        var insert = this.state.projects[project_id].conversations[conversation.id] = conversation;
        var projects = this.state.projects;
        this.setState({ projects });
    },
    addMessage: function (message)
    {
        //console.log('Projector.js -> addMessage  ', message);
        //console.log('Projector.js -> addMessage  ', message.conversation_id);
        //console.log('Projector.js -> addMessage  ', this.state.conversations);
        var project_id = this.state.conversations[message.conversation_id].owner_id;
        var insert = this.state.projects[project_id].conversations[message.conversation_id].messages[message.id] = message;
        var projectArray = new ObjectToArray(this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray, projects });
    },
    updateMessage: function (message)
    {
        //console.log('THIS IS IN PROJECTER>> >> >> ', message.message);
        message = message.message;
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insert = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];
        var projects = this.state.projects;
        this.setState({ projects });
    },
    render: function () {
        var newProjectTitle = (project) => <ProjectTitle project={project} title={project[1].title} />;

        return (
            <div className="panel-group accordion" id="accordion">
                {this.state.projectArray.map(newProjectTitle)}
                <div></div>
            </div>
        );
    }

});
export default Projecter;