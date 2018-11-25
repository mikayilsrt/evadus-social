import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";
import axios from "axios";

import mediumZoom from "medium-zoom";

export default class TimelineFeed extends Component {

    constructor (props) {
        super(props);
        this.state = {
            datas: {},
            post: [],
            activeVote: false,
        };
        this.toggleVote = this.toggleVote.bind(this);
        this.zoomMedia = this.zoomMedia.bind(this);
    }

    componentDidMount () {
        const component = document.getElementById("timelinefeed");
        axios.get("/api/profile/" + component.dataset.user_id).then((response) => {
            if (response.status === 200 && response.request.readyState === 4) {
                this.setState({
                    datas: response.data.user,
                    post: response.data.user.post
                });
                console.log(response.data.user);
                console.log(response.data.user.post);
            }
        }).catch((error) => {
            console.log(error);
        });
    }

    toggleVote (e) {
        e.preventDefault();
        this.setState({
            activeVote: !this.state.activeVote
        });
    }

    zoomMedia (e) {
        e.preventDefault();
        const zoomMediaImage = mediumZoom("#media-image");
        zoomMediaImage.open();
        zoomMediaImage.on('closed', () => zoomMediaImage.detach())
    }

    getAllPost () {
        return this.state.post.map((item) => {
            return (
                <div className="content-timeline" key={ item.id }>
                    <div className="item-header">
                        <a href={ document.location.origin + "/profile/" + this.state.datas.user_name }>
                            <div className="user-profile-img">
                                <img src={ "/assets/img/" + this.state.datas.profile_image } alt="" />
                            </div>
                        </a>
                        <ul className="">
                            <li className="fullGroupName"><a href={ document.location.origin + "/profile/" + this.state.datas.user_name }>{ this.state.datas.name }</a></li>
                            <li className="username"><a href={ document.location.origin + "/profile/" + this.state.datas.user_name }>{ "@" + this.state.datas.user_name }</a></li>
                            <li className="item-date">{ item.created_at }</li>
                        </ul>
                    </div>
                    {
                        item.content &&
                        <div className="item-text-content">
                            { item.content }
                        </div>
                    }
                    {
                        item.content &&
                        <div className="item-media-content">
                            <img id="media-image" onClick={ this.zoomMedia } className="medium-zoom-image" src={ item.media } alt="" />
                        </div>
                    }
                    <div className="item-footer">
                        <div className="item-action">
                            <ul>
                                <li><button className={ this.state.activeVote ? "toggle-active" : "" } onClick={ this.toggleVote }><Icons.Heart className="icon" /> Likes</button></li>
                                <li><button><Icons.Link className="icon" /> Share</button></li>
                                <li><button><Icons.ChevronRight className="icon" /> Status</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            );
        });
    }

    render() {
        return (
            <div>
                { this.getAllPost() }
            </div>
        );
    }
}

if (document.getElementById('timelinefeed')) {
    ReactDOM.render(<TimelineFeed />, document.getElementById('timelinefeed'));
}
