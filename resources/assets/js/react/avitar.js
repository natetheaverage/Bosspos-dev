var ClassName = React.createClass({

    getDefaultProps: function () {
        return {
            path: 'http://bit.ly/1KXXNKX'
        };
    },

    render: function () {
        return (
            <div>
                <a href={this.props.path}>
                    <img src={this.props.path} />
                </a>
                <br />

            </div>
        );
    }
});

React.render(<ClassName />, document.body);

