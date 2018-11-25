import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";
import axios from "axios";

import mediumZoom from "medium-zoom";

export default class TimelineFeed extends Component {

    constructor (props) {
        super(props);
        this.state = {
            datas: [],
            activeVote: false,
        };
        this.toggleVote = this.toggleVote.bind(this);
        this.zoomMedia = this.zoomMedia.bind(this);
    }

    componentDidMount () {
        axios.get("/api/profile/1").then((response) => {
            if (response.status === 200 && response.request.readyState === 4) {
                this.setState({
                    datas: response.data
                });
            }
        });
    }

    toggleVote (e) {
        e.preventDefault();
        this.setState({
            activeVote: !this.state.activeVote
        });
    }

    zoomMedia (e) {
        e.preventDefault()
        const zoomMediaImage = mediumZoom("#media-image")
        zoomMediaImage.open();
        zoomMediaImage.on('closed', () => zoomMediaImage.detach())
    }

    getAllPost () {
        return this.state.datas.map((data) => {
            return (
                <div className="content-timeline" key={ data.id }>
                    <div className="item-header">
                        <a href={ document.location.origin + "/profile/mariachatel" }>
                            <div className="user-profile-img">
                                <img src="/assets/img/default-profile-img.png" alt="" />
                            </div>
                        </a>
                        <ul className="">
                            <li className="fullGroupName"><a href={ document.location.origin + "/profile/mariachatel" }>Username</a></li>
                            <li className="username"><a href={ document.location.origin + "/profile/mariachatel" }>@username</a></li>
                            <li className="item-date">13 sept.</li>
                        </ul>
                    </div>
                    {
                        data.content !== undefined &&
                        <div className="item-text-content">
                            { data.content }
                        </div>
                    }
                    {
                        data.media !== undefined &&
                        <div className="item-media-content">
                            <img id="media-image" onClick={ this.zoomMedia } className="medium-zoom-image" src={ data.media } alt="" />
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
