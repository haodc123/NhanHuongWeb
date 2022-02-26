import React from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

const url = window.location.href;
var f = url.split('/'); // ['http:', '', '127.0.0.1:8000', 'edit', 'blogs']
var area = f[3]; // edit
var type = f[4]; // blogs | blogcats | sales

function NavEditor() {
    var active = 'active';
    var types = ['blogcats', 'blogs', 'sales'];
    const setNavActive = (_type) => {
        types.map(t => {
            if (t == _type) {
                document.getElementById(t).className = 'active';
            } else {
                document.getElementById(t).className = '';
            }
        });
    }
    return (
        <div className="row">
            <h4 className="control-nav">
                <ul>
                    <li id="blogcats" className={type == 'blogcats' && active}
                        ><Link onClick={()=>setNavActive('blogcats')} to="/edit/blogcats">Blog Categories</Link></li>
                    <li id="blogs" className={type == 'blogs' && active}
                        ><Link onClick={()=>setNavActive('blogs')} to="/edit/blogs">Blogs</Link></li>
                    <li id="sales" className={type == 'sales' && active}
                        ><Link onClick={()=>setNavActive('sales')} to="/edit/sales">Sales</Link></li>
                </ul>
            </h4>
        </div>
    );
}

export default NavEditor;
