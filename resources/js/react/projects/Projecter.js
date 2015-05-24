import Tasker from './Tasker';
import ProjectTitle from './ProjectTitle';


var Projecter = React.createClass({

    getInitialState: function() {
        var projects = $(bosspos.projects);
        var project = $(bosspos.project);
        var projectCollection = [];
        var taskCollection = [];
        var conversationCollection = [];
        var messageCollection = [];

        console.log('THIS IS IN PROJECTER>JS ', project);

        for(var i=0; i < project.length; i++){
            var objectLabel = 'project_'+(project[i].id);
            projectCollection.push( {objectLabel: project[i] ] );

        console.log('THIS IS IN PROJECTER>> >> >> ', projectCollection);



            // set task array for sorting
            var task = projects[i].task;
            //for task loop
            for(var j=0; j < task.length; j++) {
                taskCollection.push(['task_' +task[j].id (), {
                    id: task[i].id,
                    title: task[i].title,
                    description: task[i].description,
                    className: task[i].class,
                    dueDate: task[i].due_date,
                    dueTime: task[i].due_time,
                    creator_id: task[i].creator_id,
                    owner_id: task[i].owner_id,
                    project_id: task[i].project_id,
                    conversation_id: task[i].conversation_id,
                    facility_id: task[i].facility_id,
                    created_at: task[i].created_at,
                    updated_at: task[i].updated_at,
                    deleted_at: task[i].deleted_at
                }])
            }// end for task

            // set task array for sorting
            var task = projects[i].task;
            //for task loop
            for(var j=0; j < task.length; j++) {
                taskCollection.push(['task_' +task[j].id (), {
                    id: task[i].id,
                    title: task[i].title,
                    description: task[i].description,
                    className: task[i].class,
                    dueDate: task[i].due_date,
                    dueTime: task[i].due_time,
                    creator_id: task[i].creator_id,
                    owner_id: task[i].owner_id,
                    project_id: task[i].project_id,
                    conversation_id: task[i].conversation_id,
                    facility_id: task[i].facility_id,
                    created_at: task[i].created_at,
                    updated_at: task[i].updated_at,
                    deleted_at: task[i].deleted_at
                }])
            }// end for task

        }// end for project


        // LISTENING Project
        socket.on(['newProjectMessage'], function (message) {
            console.log('This is newProjectMessage firing in Conversation.js :', message);
            this.addMessage(message);
            $.niftyNoty({type: 'info', message: message.message, container: 'floating', closeBtn: true, timer: 4000});
        }.bind(this));





        this.findMessageLocation(projectCollection);


        return {
            projects: projectCollection
        };
    },
    makeMessage : function(){

        return newMessage = {
            id:41,
            subject:'New Message',
            body: (this.state.bodyText),
            conversation_id: this.props.id,
            user: 1,
            className: 'info'
        };

    },
    findMessageLocation : function(projects){
        var owningProject = projects.lastIndexOf("info");
        console.log('this is the owning project found in findMessageLocation ', owningProject);
    },
    render: function () {

        var newProjectTitle = function(project){
            return <ProjectTitle
                id={project[1].id}
                title={project[1].title}
                description={project[1].description}
                className={project[1].className}
                dueDate={project[1].dueDate}
                dueTime={project[1].dueTime}
                tasks={project[1].tasks}
                conversations={project[1].conversations}
                task_id={project[1].task_id}
                conversation_id={project[1].conversation_id}
                deligated_id={project[1].deligated_id}
                creator_id={project[1].creator_id}
                owner_id={project[1].owner_id}
                facility_id={project[1].facility_id}
                created_at={project[1].created_at}
                updated_at={project[1].updated_at}
                deleted_at={project[1].deleted_at}
                user_id={project[1].user_id}
            />
        };


        return (
            <div className="panel-group accordion" id="accordion">

                    {this.state.projects.map(newProjectTitle)}

            </div>
        );
    }

});

export default Projecter;