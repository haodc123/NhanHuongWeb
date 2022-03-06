import React from 'react';

function PagingEditor(props) {

    let page_curr = props.page_curr;
    let page_prev = page_curr-1;
    let page_next = page_curr+1;
    let page_last = props.page_last;
    let url_base = props.url_base;
    let url_curr = url_base+'?page='+page_curr;
    let url_prev = url_base+'?page='+page_prev;
    let url_next = url_base+'?page='+page_next;
    let url_last = url_base+'?page='+page_last;

    const i_prev = page_curr == 1 ? '' : <li id="prev"
                                            ><a onClick={()=>handleClickPage(event, page_prev, url_prev)} href={url_prev}>{page_prev}</a></li>;

    const i_next = page_curr == page_last ? '' : <li id="next"
                                            ><a onClick={()=>handleClickPage(event, page_next, url_next)} href={url_next}>{page_next}</a></li>;

    const handleClickPage = (e, page, url) => {
        e.preventDefault();
        props.setPageCurr(page);
        props.setUrlCurr(url);
        props.needUpdate(prev=>prev+1);
    }

    return (
        <div className="row">
            <div className="mpaging control-nav" style={{float: "right"}}>
                <ul>
                    <li id="first"
                        ><a onClick={()=>handleClickPage(event, 1, url_base)} href={url_base}>First</a></li>
                    {i_prev}
                    <li id="curr" className="curr"
                        ><a onClick={()=>handleClickPage(event, page_curr, url_curr)} href={url_curr}>{page_curr}</a></li>
                    {i_next}
                    <li id="last"
                        ><a onClick={()=>handleClickPage(event, page_last, url_last)} href={url_last}>Last</a></li>
                </ul>
            </div>
        </div>
    );
}

export default PagingEditor;
