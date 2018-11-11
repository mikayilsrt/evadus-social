import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ModalPostForm extends Component {

    constructor (props) {
        super(props);
        this.state = {
        }
    }

    render () {
        return (
            <div className="modal fade" tabIndex="-1" role="dialog" id="exampleModal">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title">Modal title</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <form encType={"multipart/form-data"}>
                                <div className="form-group">
                                    <textarea className="form-control" placeholder="Quoi de neuf ?"></textarea>
                                </div>
                                <div className="custom-file">
                                    <input type="file" className="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" />
                                    <label className="custom-file-label" htmlFor="inputGroupFile04">Choose file</label>
                                </div>
                            </form>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" className="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

}

if (document.getElementById('modalNewPost')) {
    ReactDOM.render(<ModalPostForm/>, document.getElementById('modalNewPost'));
}