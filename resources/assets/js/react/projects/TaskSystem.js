import TaskList from './TaskList';

var TaskSystem = React.createClass({

    getInitialState: function(){

        socket.on('newTask', function (message) {
            console.log('This is newTask firing in receiveEvent.js :', message);

            this.addTask(message);

            $.niftyNoty({
                type: 'info',
                message: message.task,
                container: 'floating',
                closeBtn: true
            });
        }.bind(this));

        return {
            items: [],
            task: ''
        };
    },
    onChange: function(e){

        var task = e.target.value;

        this.setState({ task });
    },
    broadcast: function(e){

        socket.emit('taskCreated', {task:(this.state.task)});

        e.preventDefault();
    },
    addTask: function(task){

        var items = this.state.items.concat([task]);

        task = '';

        this.setState({ items, task });

    },
    removeTask: function(e){

        e.preventDefault();

    },
    render: function () {
        return (
            <div className='panel panel-dark'>
                <div className='panel-heading'>
                    <div className="panel-control">
                        <div className="btn-group">
                            <button data-toggle="dropdown" className="dropdown-toggle btn btn-info">
                                <i className="fa fa-gear fa-lg"></i>
                            </button>
                            <ul className="dropdown-menu dropdown-menu-right bg-dark">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li className="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <h2 className='panel-title'>Tasker</h2>
                </div>
                <div className='panel-body bg-dark'>
                <TaskList items={this.state.items} />

                    <form className='form-horizontal bg-trans bord-btm board-top' onSubmit={this.broadcast}>
                        <div className='input-group mar-btm'>
                            <span className='input-group-btn'>
                                <button className='btn btn-primary' type='submit'><span className='fa fa-plus'></span></button>
                            </span>
                            <input className='form-control' onChange={this.onChange} value={this.state.task}/>
                        </div>
                    </form>
                </div>
            </div>


        );
    }

});

export default TaskSystem;