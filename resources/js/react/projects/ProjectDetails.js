//import SubClass from './SubClass';

var ProjectDetails = React.createClass({

    getInitialState: function () {
        var project = this.props.project[1];
        return {
            id: this.props.project[0],
            description: project.description,
            dueDate: project.due_date,
            dueTime: project.due_time
        };
    },
    render: function () {
        var tab = `bosspos-projecter-tab-1-${this.state.id}`;
        return (
            <div id={tab} className="tab-pane fade active in">
                <p>{this.state.description}</p>
                <p>Due: {this.state.dueDate}</p>
                <p>At: {this.state.dueTime}</p>
            </div>
        );
    }
});
export default ProjectDetails;