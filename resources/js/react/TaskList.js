var TaskList = React.createClass({


    render: function () {

        var displayTask = (task) => <li>{task}</li>;

        return (
            <div>
                <ul>
                    { this.props.items.map(displayTask) }
                </ul>
            </div>
        );
    }

});
