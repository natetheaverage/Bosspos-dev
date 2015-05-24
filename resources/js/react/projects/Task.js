//import SubClass from './SubClass';

var Task = React.createClass({

    getInitialState: function () {

        return {
            classVars: []
        };
    },
    render: function () {
        return (
            <div className="row mar-btm">
                <div className="col-sm-12">
                    <a className="col-sm-12 list-group-item mar-no">
                        <div className="btn-group btn-group-vertical pull-right mar-lft">
                            <button className="btn btn-mint"><span className="fa fa-edit"></span> Edit</button>
                            <button className="btn btn-mint"><span className="fa fa-user"></span> Delegate</button>
                            <button className="btn btn-mint"><span className="fa fa-delete"></span> Delete</button>
                        </div>
                        <h4 className="list-group-item-heading text-thin">{this.props.title}</h4>
                        <p className="list-group-item-text">{this.props.description}</p>
                    </a>
                </div>
            </div>
        );
    }

});

export default Task;