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
            console.log('This is newProjectMessage caught by socket in Projecter.js  :', message[1][1]);
            this.addMessage(message);
            $.niftyNoty({type: 'info', message: message[1][1], container: 'floating', closeBtn: true, timer: 4000});
        }.bind(this))
        .on(['projectMessageChange'], function (message) {
            this.updateMessage({ message });
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
        var project_id = this.state.conversations[message[1].project_id].owner_id;
        var insert = this.state.projects[project_id].conversations[message[1].id] = message[1];
        console.log('THIS IS IN PROJECTER>> >> >> ', this.state.projects[project_id].conversations[message[1].id]);
        var projectArray = new ObjectToArray(this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray, projects });
        console.log('THIS IS IN PROJECTER>> >> >> ', this.state.projects);
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
    addMessage: function (message)
{
        console.log('Projector.js -> addMessage message[1].conversation_id ', message);
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insert = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];
        var projectArray = new ObjectToArray(this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray, projects });
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