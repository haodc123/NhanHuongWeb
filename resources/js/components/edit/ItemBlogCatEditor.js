import React, { useState } from 'react';
import use_API from '../../utils/use_API'; 
import {f_sendAPI,f_sendAPIPost} from '../../utils/Utils'; 
import ReactDOM from 'react-dom';

function ItemBlogCatEditor(props) {

    const [name, setName] = useState(props.cat.blogs_cat_name);
    const [order, setOrder] = useState(props.cat.blogs_cat_order);
    const [status, setStatus] = useState(props.cat.blogs_cat_status);
    const [resStatus, setResStatus] = useState(0);

    var id = props.cat.id;

    // Handle Delete
    const handleClickDelete = (_id, e) => {
        e.preventDefault();
        if(window.confirm('Are you sure to this action?'))
            sendDelete(_id);
    }
    const sendDelete = (_id) => {
        const requestData = {
            id: _id
        };
        f_sendAPIPost('/edit/del_blogcats', handleAPIReceivedDelete, requestData);
    }
    const handleAPIReceivedDelete = res => {
        setResStatus(res.status);
        if (res.status)
            props.handlePopup('Announcement', 'You deleted this item successfully!');
    }
    
    // Handle Update
    const handleUpdate = (e) => {
        e.preventDefault();
        alert(status);
    }

    return (
        <tr>
            <td>{id}</td>
            <td>        
                <input type="text" name="bc_name"
                    value={name} onChange={e=>setName(e.target.value)} />
            </td>
            <td>
                <input type="text" name="bc_order"
                    value={order} onChange={e=>setOrder(e.target.value)} />
            </td>
            <td>
                <select name="bc_status" onChange={e=>setStatus(e.target.value)}>
                    <option selected={status == 0} value="0" >No active</option>
                    <option selected={status == 1} value="1" >Active</option>
                </select>
            </td>
            <td>
                <form>
                    <button
                        name="bc_action"
                        value="update"
                        onClick={handleUpdate}
                        className="btn btn-primary">Update</button>
                    <button 
                        name="bc_action"
                        value="delete" 
                        onClick={() => handleClickDelete(id, event)}
                        className="btn btn-danger">Delete</button>
                    {resStatus}
                </form>
            </td>
        </tr>
    );
}

export default ItemBlogCatEditor;
