import React, { useState, useEffect } from 'react';
import {f_sendAPIGet} from '../../utils/Utils'; 
import ItemBlogEditor from './ItemBlogEditor';
import PagingEditor from './PagingEditor';

function TableBlogEditor(props) {
    const [blogs, setBlogs] = useState([]);
    const [needUpdate, setNeedUpdate] = useState(0);
    const [blogcats, setBlogcats] = useState([]);
    let url_base = '/edit/get_blogs';
    const [page_last, setPageLast] = useState(0);
    const [url_curr, setUrlCurr] = useState(url_base);
    const [page_curr, setPageCurr] = useState(1);
    const [page_curr_static, setPageCurrStatic] = useState(page_curr);

    useEffect(() => {
        /**
         * res.data:
         * {data: {…}, status: 1}
            data:
            blogcats: (2) [{…}, {…}]
            blogs:
            current_page: 1
            data: Array(5)
            0: {id: 1, blog_title: 'Thông tin ăn vặt ĐN', blog_title_slug: 'Thong-tin-an-vat-dn', blog_content: 'Thông tin ăn vặt ĐN\r\n\r\nThông tin ăn vặt ĐN', blog_cat: '1,2', …}
            1: {id: 2, blog_title: 'Cách làm bánh ngon', blog_title_slug: 'Cach-lam-banh-ngon', blog_content: '<p>\r\nCùng thực hiện làm bánh bột lọc với công thức…bị dính vào lá.\r\n                            </p>', blog_cat: '2', …}
            2: {id: 4, blog_title: 'Cách làm bánh ngon 2', blog_title_slug: 'Cach-lam-banh-ngon-2', blog_content: '<p>\r\n2 Cùng thực hiện làm bánh bột lọc với công th…bị dính vào lá.\r\n                            </p>', blog_cat: '2', …}
            3: {id: 5, blog_title: 'Cách làm bánh ngon 3', blog_title_slug: 'Cach-lam-banh-ngon-3', blog_content: '<p>\r\n3 Cùng thực hiện làm bánh bột lọc với công th…bị dính vào lá.\r\n                            </p>', blog_cat: '2', …}
            4: {id: 6, blog_title: 'Cách làm bánh ngon 4', blog_title_slug: 'Cach-lam-banh-ngon-4', blog_content: '<p>\r\nCùng thực hiện làm bánh bột lọc với công thức…bị dính vào lá.\r\n                            </p>', blog_cat: '2', …}
            length: 5
            [[Prototype]]: Array(0)
            first_page_url: "http://127.0.0.1:8000/edit/get_blogs?page=1"
            from: 1
            last_page: 2
            last_page_url: "http://127.0.0.1:8000/edit/get_blogs?page=2"
            next_page_url: "http://127.0.0.1:8000/edit/get_blogs?page=2"
            path: "http://127.0.0.1:8000/edit/get_blogs"
            per_page: "5"
            prev_page_url: null
            to: 5
            total: 6
            [[Prototype]]: Object
            [[Prototype]]: Object
            status: 1
         */
        f_sendAPIGet(url_curr, (res) => {
            setPageCurrStatic(page_curr);
            setBlogs(res.data.blogs.data);
            setBlogcats(res.data.blogcats);
            setPageLast(res.data.blogs.last_page);
        });
    }, [needUpdate]);

    return (
        <>
        <div className="row">
            <div className="blog-box clearfix">
                <table className="table table-hover list-ctrl">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {blogs.map((blog, index) => (
                        <ItemBlogEditor 
                            num={index} 
                            page_curr={page_curr_static} 
                            key={index} 
                            blog={blog} 
                            blogcats={blogcats} 
                            needUpdate={setNeedUpdate} 
                            handlePopup={props.handlePopup} />
                    ))}
                    </tbody>
                </table>
            </div>
        </div>

        <PagingEditor 
            url_base={url_base}
            page_curr={page_curr} 
            page_last={page_last}
            setPageCurr={setPageCurr} 
            setUrlCurr={setUrlCurr} 
            needUpdate={setNeedUpdate} />

        </>
    );
}

export default TableBlogEditor;
