import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";

export default class TimelineFeed extends Component {

    constructor (props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <div className="content-timeline">
                <div className="item-header">
                    <a href>
                        <div className="user-profile-img">
                            <img src="https://kaem.io/assets/img/default-profile-img.png" alt />
                        </div>
                    </a>
                    <ul className>
                        <li className="fullGroupName"><a href="#">Username</a></li>
                        <li className="username"><a href="#">@username</a></li>
                        <li className="item-date">13 sept.</li>
                    </ul>
                </div>
                <div className="item-text-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan justo sem, vitae sollicitudin ex pulvinar vel. Praesent eget lacinia purus, id condimentum orci. In vulputate nibh quis sapien ultrices vestibulum. Mauris ut velit at leo posuere.
                </div>
                <div className="item-media-content">
                    <img src="https://images.unsplash.com/photo-1540281481658-a6ebea61c280?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a46acf5c0244921f4eba50da0dfbf401&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt />
                </div>
                <div className="item-footer">
                    <div className="item-action">
                        <ul>
                            <li><button><Icons.Heart className="icon" /> Likes</button></li>
                            <li><button><Icons.Link className="icon" /> Share</button></li>
                            <li><button><Icons.ChevronRight className="icon" /> Status</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('timelinefeed')) {
    ReactDOM.render(<TimelineFeed />, document.getElementById('timelinefeed'));
}