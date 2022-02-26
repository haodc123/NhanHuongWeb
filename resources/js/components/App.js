import React, { useState } from 'react';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import ReactDOM from 'react-dom';
import NavEditor from './edit/NavEditor';
import ContentEditor from './edit/ContentEditor';
import CustomPopup from "./CustomPopup";

function App() {

    const [popupDisplay, setPopupDisplay] = useState(false);
    const [popupTitile, setPopupTitile] = useState('');
    const [popupContent, setPopupContent] = useState('');
    const [popupButton1, setPopupButton1] = useState(null);
    const [popupHandleButton1, setPopupHandleButton1] = useState(null);

    const setDisplayPopup = (_title, _content, _b1 = null, _handleb1 = null) => {
        setPopupTitile(_title);
        setPopupContent(_content);
        setPopupButton1(_b1);
        setPopupHandleButton1(_handleb1);
        setPopupDisplay(true);
    }

    const popupCloseHandler = (e) => {
        setPopupDisplay(e);
    };

    return (
        <div id="blog" className="blog-main pad-top-100 pad-bottom-100 parallax">
            <div className="container">
                <div className="row">
                    <div className="col-lg-1 col-md-1 col-sm-1"></div>
                    <div className="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        
                        <BrowserRouter>
                            <NavEditor/>
                            <Switch>
                                <Route exact path="/edit/">
                                    <ContentEditor type="blogs" handlePopup={setDisplayPopup} />
                                </Route>
                                <Route exact path="/edit/blogs">
                                    <ContentEditor type="blogs" handlePopup={setDisplayPopup} />
                                </Route>
                                <Route exact path="/edit/blogcats">
                                    <ContentEditor type="blogcats" handlePopup={setDisplayPopup} />
                                </Route>
                                <Route exact path="/edit/sales">
                                    <ContentEditor type="sales" handlePopup={setDisplayPopup} />
                                </Route>
                            </Switch>
                        </BrowserRouter>

                        {/* Test popup */}
                        <button onClick={(e) => setPopupDisplay(!popupDisplay)}>Toggle Popup</button>
                        <CustomPopup
                            onClose={popupCloseHandler}
                            show={popupDisplay}
                            title={popupTitile}
                            button1={popupButton1}
                            handleButton1={popupHandleButton1}
                        >
                            <h3>{popupContent}</h3>
                        </CustomPopup>

                    </div>
                    {/* end col */}
                    <div className="col-lg-2 col-md-1 col-sm-1"></div>
                </div>
                {/* end row */}
                
            </div>
            {/* end container */}
        </div>
    );
}

export default App;
