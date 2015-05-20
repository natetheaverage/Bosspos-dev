var ReceiveEvent = React.createClass({



    getInitialState: function() {


        localStorage.debug = '*';

        return {
            event: [],
            count: 0,
            name: 'Jack'
        };
    },

    add: function(){
        var count = this.state.count + 1;
        this.setState({ count });
    },
    sub: function(){
        console.log('This is sub firing in receiveEvent.js :');
        socket.emit('test-channel:hi', this.state.count);
    },

    connect: function() {

        socket.on('test-channel:Boss\\Events\\CustomerWasRegistered', function (message) {
            console.log('This is firing in receiveEvent.js :', message);
            var name = message.customer.identification_number ;
            this.add();
            this.setState({ name });

        }.bind(this))
            .on('test-channel:Boss\\Events\\EmployeeWasRegistered', function (message) {
            console.log('This is firing in receiveEvent.js :', message);
            var name = message.employee.title ;
            this.add();
            this.setState({ name });

        }.bind(this));
    },

    render: function () {
        var display = (event) => <li>{event}</li>;
        this.connect();
        return (
            <div>
                <h1>{this.state.name}: {this.state.count}</h1>
                <button onClick={this.sub}>- 1</button>
                <button onClick={this.add}>+ 1</button>
            </div>
        );
    }
});
React.render(<ReceiveEvent />, document.querySelector('#receive'))