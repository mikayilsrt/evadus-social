import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class FollowButtonBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            user_id: props.user_id || [],
            followers: props.followers || [],
            isFollowed: props.follow || false,
            profile_id: props.profile_id || 0
        };
    }

    componentDidMount () {
        this.state.followers.map((follower) => {
            if (follower.pivot.following_id == this.state.user_id) {
                this.setState({
                    isFollowed: true
                });
            }
        })
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
            profile_id: this.state.profile_id,
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
                user_id: span.dataset.authid,
                profile_id: span.dataset.user_id,
                followers: JSON.parse(span.dataset.followers)
            }
        ),
    span);
});