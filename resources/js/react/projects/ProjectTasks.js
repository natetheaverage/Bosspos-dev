import Task from './Task';

var ProjectTasks = React.createClass({

    getInitialState: function () {
        var project = this.props.project[1];

        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: project.conversation
        };
    },
    render: function () {

        var tab = `bosspos-projecter-tab-2-${this.state.id}`;

        var newTaskList = function(task) {

            return <Task
                id={task.id}
                title={task.title}
                description={task.description}
                className={task.className}
                dueDate={task.dueDate}
                dueTime={task.dueTime}
            />
        };
        //console.log('This is in ProjectTasks >> >> >>', this.state.tasks);

        return (
            <div id={tab} className="tab-pane fade">
                <div className="list-group bg-dark">
                {this.state.tasks.map(newTaskList)}
                </div>
            </div>
        );
    }

});

export default ProjectTasks;