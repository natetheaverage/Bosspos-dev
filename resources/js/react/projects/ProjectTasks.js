import Task from './Task';

var ProjectTasks = React.createClass({

    getInitialState: function () {

        return {
            tasks: this.props.tasks
        };
    },
    render: function () {

        var tab = `bosspos-projecter-tab-2-${this.props.id}`;

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
        //console.log(this.props.tasks);

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