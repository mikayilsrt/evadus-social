import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class FollowButtonBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            isFollowed: props.follow || false,
            user_id: props.user_id || 0
        };
    }

    handleChange () {
        this.setState({
            isFollowed: !this.state.isFollowed
        });
    }

    handleClick (e) {
        e.preventDefault();
        this.handleChange();
        let isFollowed = !this.state.isFollowed;

        axios.post("/follow", {
            _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            user_id: this.state.user_id,
            isFollowed: isFollowed
        }).then((response) => {
            console.log(response);
        }).catch((error) => {
            console.log(error);
        });
    }

    render () {
        return (
            <button className={ this.state.isFollowed ? "follow-btn active-follow" : "follow-btn" } onClick={ (e) => this.handleClick(e) }>
                { this.state.isFollowed ? "Subscriber" : "Follow" }
            </button>
        );
    }

}

document.querySelectorAll("span.follow-block").forEach((span) => {
    ReactDOM.render(
        React.createElement(
            FollowButtonBlocks,
            {
                user_id: span.dataset.user_id
            }
        ),
    span);
});