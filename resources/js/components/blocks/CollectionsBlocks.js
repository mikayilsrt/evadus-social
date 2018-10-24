import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CollectionsBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            collections: []
        };
    }

    render() {
        return (
            <div className="collection-item col-md-6">
                <a href="">
                    <div className="content-item" style={{ backgroundImage: "url(" + "https://images.unsplash.com/photo-1514866747592-c2d279258a78?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=35bb216e4f81c3bde24544b5630f5bd6&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" + ")" }}>
                        <div className="header-collection-item">
                            <div className="user-profile-img">
                                <img src="https://kaem.io/assets/img/default-profile-img.png" />
                            </div>
                        </div>
                        <div className="footer-collection-item">
                            <div className="footer-content-item">
                                <h4>Fashion Talk</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare posuere neque a vestibulum.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        );
    }
}

if (document.getElementById('collectionsBlocks')) {
    ReactDOM.render(<CollectionsBlocks />, document.getElementById('collectionsBlocks'));
}
