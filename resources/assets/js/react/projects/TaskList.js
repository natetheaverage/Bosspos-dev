var TaskList = React.createClass({


    render: function () {

        var displayTask = (task) =>
            <div className='list-group-item-default mar-btm'>
                <label className="form-checkbox form-icon form-primary active form-text">
                    <input type="checkbox" />
                </label>
                <span className='text-center text-bold'>{task}</span>
                <span className="badge badge-info pull-right">11</span>
            </div>;

        return (
            <div className='task-list'>
                <div className='list-group'>
                    { this.props.items.map(displayTask) }
                    <div className='d'></div>
                </div>
            </div>
        );
    }

});

export default TaskList;