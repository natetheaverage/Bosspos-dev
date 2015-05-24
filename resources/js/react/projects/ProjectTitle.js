import ProjectBody from './ProjectBody';

var ProjectTitle = React.createClass({

    getInitialState: function () {

        return {
            project: []
        };
    },
    render: function () {
        var classString = `panel panel-bordered panel-${this.props.className}`;

        var componentName = `#collapse-${this.props.id}`;

        //console.log('this is how the props come through to ProjectTitle.js ', this.props);

return (
            <div className={classString}>
                <div className="panel-heading">
                    <h4 className="panel-title">
                        <a data-parent="#accordion" data-toggle="collapse" href={componentName} aria-expanded="false" className="collapsed">{this.props.title}</a>
                    </h4>
                </div>
                <ProjectBody
                    id={this.props.id}
                    description={this.props.description}
                    dueDate={this.props.dueDate}
                    dueTime={this.props.dueTime}
                    tasks={this.props.tasks}
                    conversations={this.props.conversations}
                />
            </div>

        );
    }

});

export default ProjectTitle;