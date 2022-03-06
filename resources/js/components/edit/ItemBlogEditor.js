import React, { useState } from 'react';
import {f_sendAPIPost} from '../../utils/Utils';
import { useHistory } from 'react-router-dom';
import * as mConstant from '../../utils/Constants';

function ItemBlogEditor(props) {

    const [resStatus, setResStatus] = useState(0);
    const history = useHistory();

    var id = props.blog.id;
    var number = mConstant.PAGINATE_PER_PAGE*(props.page_curr-1)+props.num+1;
    var title = props.blog.blog_title;
    var status = props.blog.blog_status;

    var cats = props.blog.blog_cat;
    var a_cats = cats.split(",");
    var blogcats_all = props.blogcats;
    

    // Handle Delete
    const handleClickUpdate = (type, e) => {
        e.preventDefault();
        if (type == 'delete') {
            if(window.confirm('Are you sure to this action?'))
            sendDelete();
        } else {
            openUpdate();
        }
        
    }
    const sendDelete = () => {
        const requestData = {
            id: id
        };
        f_sendAPIPost('/edit/del_blog', handleAPIReceivedDelete, requestData);
    }
    const handleAPIReceivedDelete = res => {
        setResStatus(res.status);
        if (res.status) {
            props.handlePopup('Announcement', 'You deleted this item successfully!');
            props.needUpdate(prev => prev+1);
        }
    }

    const openUpdate = () => {
        history.push({
            pathname: '/edit/blog/form',
            state: { id: id }
        });
    }

    return (
        <tr>
            <td>{number}</td>
            <td>
                <label>{title}</label>
            </td>
            <td>
                <label>{blogcats_all.map(bc_all => {
                    if (a_cats.includes(bc_all.id.toString()))
                        return bc_all.blogs_cat_name+', ';
                })}</label>
            </td>
            <td>
                <label>{status == 1 ? ('Publish') : ('Draft')}</label>
            </td>
            <td>
                <form>
                    <button
                        name="b_action"
                        value="update"
                        onClick={() => handleClickUpdate('update', event)}
                        className="btn btn-primary">Update</button>
                    <button 
                        name="b_action"
                        value="delete" 
                        onClick={() => handleClickUpdate('delete', event)}
                        className="btn btn-danger">Delete</button>
                    {resStatus}
                </form>
            </td>
        </tr>
    );
}

export default ItemBlogEditor;
