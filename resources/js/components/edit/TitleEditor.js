import React from 'react';
import ReactDOM from 'react-dom';

function TitleEditor(props) {

    var title = props.type == 'blogcats' ? 'blog categories' : props.type;
    function toUpperCaseFirst(s) {
        return s && s[0].toUpperCase() + s.slice(1); 
    }

    return (
        <div className="row">
            <h2 className="detail-title">
            Quản lý {toUpperCaseFirst(title)}
            </h2>
            <br />
        </div>
    );
}

export default TitleEditor;
