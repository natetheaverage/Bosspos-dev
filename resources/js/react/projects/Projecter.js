import Tasker from './Tasker';
import ProjectTitle from './ProjectTitle';
import ProjectCommand from './ProjectCommand';
import ObjectToArray from './ObjectToArray';


var Projecter = React.createClass({

    getInitialState: function () {
        var projectCollections = new ProjectCommand();

        // LISTENING to Project Events
        socket.on(['newProjectMessage'], function (message) {
            //console.log('This is newProjectMessage caught by socket in Projecter.js  :', message[1][1]);
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
    updateMessage: function (message)
    {
        //console.log('THIS IS IN PROJECTER>> >> >> ', message.message);
        message = message.message;
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insertProject = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];// = message[1];
        var projects = this.state.projects;
        this.setState({ projects });
    },
    addMessage: function (message)
    {
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insertProject = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];
        var projectArray = new ObjectToArray(this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray, projects });
        //console.log('THIS IS IN PROJECTER>> >> >> ', this.state.projects);
    },
    render: function () {

        var newProjectTitle = (project) => <ProjectTitle project={project} title={project[1].title} />;

        return (
            <div className="panel-group accordion" id="accordion">
                {this.state.projectArray.map(newProjectTitle)}
                <div  ></div>
            </div>
        );
    }

});
export default Projecter;