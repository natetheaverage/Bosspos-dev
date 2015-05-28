import ProjectDetails from './ProjectDetails';
import ProjectTasks from './ProjectTasks';
import ProjectConversation from './ProjectConversation';

var ProjectBody = React.createClass({
    getInitialState: function () {
        var project = this.props.project[1];
        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: project.conversation
        };
    },
    render: function () {
        var componentName = `collapse-${this.state.id}`;
        var tab1 = `#bosspos-projecter-tab-1-${this.state.id}`;
        var tab2 = `#bosspos-projecter-tab-2-${this.state.id}`;
        var tab3 = `#bosspos-projecter-tab-3-${this.state.id}`;

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
                            <ProjectDetails project={this.props.project} />
                            <ProjectTasks project={this.props.project} tasks={this.state.tasks} />
                            <ProjectConversation project={this.props.project} conversations={this.state.conversations} />

                        </div>
                    </div>
                </div>
            </div>
        );
    }
});
export default ProjectBody;
