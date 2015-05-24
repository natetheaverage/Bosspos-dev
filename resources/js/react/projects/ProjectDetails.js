//import SubClass from './SubClass';

var ProjectDetails = React.createClass({

    render: function () {


        var tab = `bosspos-projecter-tab-1-${this.props.id}`;


        return (
            <div id={tab} className="tab-pane fade active in">
                <p>{this.props.description}</p>
                <p>{this.props.dueDate}</p>
                <p>{this.props.dueTime}</p>
            </div>
        );
    }

});

export default ProjectDetails;