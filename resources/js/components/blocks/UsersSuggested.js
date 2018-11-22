import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class UsersSuggested extends Component {

    constructor (props) {
        super(props);
        this.state = {
            addClass: false,
        };
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick (e) {
        e.preventDefault();
        this.setState({
            addClass: !this.state.addClass
        });
    }

    render () {
        return (
            <div className="user-item">
                <div className="user-profile">
                    <a href={ document.location.origin + "/profile/mariachatel" }>
                        <img src="/assets/img/default-profile-img.png" alt=""/>
                    </a>
                </div>
                <div className="user-info">
                    <h3><a href={ document.location.origin + "/profile/mariachatel" }>Alan Thorton</a><span>@alanthorton</span></h3>
                    <button className={ this.state.addClass ? "follow-btn active-follow" : "follow-btn" } onClick={ this.handleClick }>
                        { this.state.addClass ? "Subscriber" : "Follow" }
                    </button>
                </div>
            </div>
        );
    }

}

if (document.getElementById('userSuggested')) {
    ReactDOM.render(<UsersSuggested />, document.getElementById('userSuggested'));
}