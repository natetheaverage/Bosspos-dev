//import SubClass from './SubClass';

var Message = React.createClass({

    getInitialState: function () {

        return {
            classVars: []
        };
    },
    render: function () {
        return (
            <a className="col-sm-12 list-group-item mar-no">
                <div className="user-stamp col-md-3 board-all">
                    <img className="img align-center img-sm img-circle" src="/img/av3.png" />
                    <h4 className="text-thin">User Name</h4>
                    <span className="fa fa-logged-in"></span>
                    <div className="btn-group ">
                        <button className="btn btn-sm btn-primary"><span className="fa fa-user"></span> Profile</button>
                        <button className="btn btn-sm btn-primary"><span className="fa fa-message"></span> Message</button>
                    </div>
                </div>
                <div className="col-md-9 board-rgt">
                    <p>Message content and stuff... Die calmly like a dead lagoon. Chocolate stew has to have a dried, delicious oysters component.</p>
                    <div className="bg-gray-light bord-top mar-top">
                        <div className="btn-group pull-right">
                            <button className="btn btn-mint"><span className="fa fa-edit"></span> Edit</button>
                            <button className="btn btn-danger"><span className="fa fa-close"></span> Delete</button>
                        </div>
                    </div>
                </div>
            </a>
        );
    }

});

export default Message;
