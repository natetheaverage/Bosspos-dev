var Counter = React.createClass({
    getInitialState: function(){
        return { count: 0 };
    },
    add: function(){
        var count = this.state.count + 1;
        this.setState({ count });
    },
    sub: function(){
        var count = this.state.count - 1;
        this.setState({ count });
    },
    render: function () {

        return (
            <div>
                <h1>counter: {this.state.count}</h1>
                <button onClick={this.sub}>- 1</button>
                <button onClick={this.add}>+ 1</button>
            </div>
        );
    }
});
React.render(<Counter />, document.body);