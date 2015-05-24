import ProjectDetails from './ProjectDetails';
import ProjectTasks from './ProjectTasks';
import ProjectConversation from './ProjectConversation';

var ProjectBody = React.createClass({

    getInitialState: function () {

        return {
            classVars: []
        };
    },
    render: function () {
        var componentName = `collapse-${this.props.id}`;
        var tab1 = `#bosspos-projecter-tab-1-${this.props.id}`;
        var tab2 = `#bosspos-projecter-tab-2-${this.props.id}`;
        var tab3 = `#bosspos-projecter-tab-3-${this.props.id}`;

        //console.log('this is how the props come through to ProjectBody.js ', this.props);

        return (
            <div className="panel-collapse collapse" id={componentName} aria-expanded="false" style={{height: '0px'}}>
                <div className="bg-dark">
                    <div className="tab-base accordion-tab-base tab-stacked-left bg-trans">
                        <ul className="nav nav-tabs">
                            <li className="active">
                                <a data-toggle="tab" href={tab1} aria-expanded="true">Details</a>
                            </li>
                            <li className="">
                                <a data-toggle="tab" href={tab2} aria-expanded="false">Tasks</a>
                            </li>
                            <li className="">
                                <a data-toggle="tab" href={tab3} aria-expanded="false">Notes</a>
                            </li>
                        </ul>
                        <div className="tab-content bg-gray-dark">
                            <ProjectDetails
                                id={this.props.id}
                                description={this.props.description}
                                dueDate={this.props.dueDate}
                                dueTime={this.props.dueTime}
                            />
                            <ProjectTasks
                                id={this.props.id}
                                tasks={this.props.tasks}
                            />
                            <ProjectConversation
                                id={this.props.id}
                                conversations={this.props.conversations}
                            />

                        </div>
                    </div>
                </div>
            </div>

        );
    }

});

export default ProjectBody;
