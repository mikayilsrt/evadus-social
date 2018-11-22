import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class HeaderProfileContent extends Component {

    constructor (props) {
        super(props);
        this.state = {
            followActive: false,
        };
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick (e) {
        e.preventDefault();
        this.setState({
            followActive: !this.state.followActive
        });
    }

    render () {
        return (
            <div className="header-profile-content">
                <div className="left-content">
                    <div className="profile-image">
                        <img src="/assets/img/default-profile-img.png"/>
                    </div>
                </div>
                <div className="right-content">
                    <h3>Maria Châtel-Innocenti</h3>
                    <button className={ this.state.followActive ? "follow-btn active-follow" : "follow-btn" } onClick={ this.handleClick }>
                        { this.state.followActive ? "Subscriber" : "Follow" }
                    </button>
                    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                        impression.</p>
                </div>
            </div>
        )
    }

}

if (document.getElementById('HeaderProfileContent')) {
    ReactDOM.render(<HeaderProfileContent />, document.getElementById('HeaderProfileContent'));
}