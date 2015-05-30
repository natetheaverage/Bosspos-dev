import ProjectBody from './ProjectBody';
var ProjectTitle = React.createClass({
    getInitialState: function () {
        //console.log('t@@@ ProjectTitle.js -->', this.props.project[1].class);
       return {
            id: this.props.project[0],
            className: this.props.project[1].class
        };
    },
    render: function () {
        var classString = `panel panel-bordered panel-${this.state.className}`;
        var componentName = `#collapse-${this.state.id}`;
        //console.log('t@@@ ProjectTitle.js -->', componentName);
return (
            <div className={classString}>
                <div className="panel-heading">
                    <h4 className="panel-title">
                        <a data-parent="#accordion" data-toggle="collapse" href={componentName} aria-expanded="false" className="collapsed">{this.props.title}</a>
                    </h4>
                </div>
                <ProjectBody project={this.props.project} />
            </div>
        );
    }
});

export default ProjectTitle;