var ReceiveEvent = React.createClass({



    getInitialState: function() {

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
        }.bind(this))
        .on('addIt', function (message) {
            console.log('This is addIt firing in receiveEvent.js :', message);
            this.add();
                $.niftyNoty({
                    type: 'info',
                    message: "Your browser's <strong>cookie</strong> functionality is turned off. Some settings won\'t work as expected....",
                    container: 'floating',
                    closeBtn: true
                });
        }.bind(this));

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

            socket.emit('pop', { my: 'data' });

    },

    connect: function() {


    },

    render: function () {
        var display = (event) => <li>{event}</li>;
        //this.connect();
        return (
            <div>
                <h2>{this.state.name}: {this.state.count}</h2>
                <button onClick={this.sub}>- 1</button>
                <button onClick={this.add}>+ 1</button>
            </div>
        );
    }
});
React.render(<ReceiveEvent />, document.querySelector('#receive'))