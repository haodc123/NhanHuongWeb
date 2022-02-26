import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";

const CustomPopup = (props) => {
  const [show, setShow] = useState(false);

  var displayButton1 = props.button1 ? <button className="pu-button1" onClick={props.handleButton1}>{props.button1}</button> : '';

  const closeHandler = (e) => {
    setShow(false);
    props.onClose(false);
  };
  const reloadPage = (e) => {
    window.location.reload();
  };

  useEffect(() => {
    setShow(props.show);
  }, [props.show]);

  return (
    <div
      style={{
        visibility: show ? "visible" : "hidden",
        opacity: show ? "1" : "0"
      }}
      className="overlay"
    >
      <div className="popup">
        <h2>{props.title}</h2>
        <div className="content">{props.children}</div>
        <button className="pu-button0" onClick={reloadPage}>Close</button>
        {displayButton1}
      </div>
    </div>
  );
};

CustomPopup.propTypes = {
  title: PropTypes.string.isRequired,
  show: PropTypes.bool.isRequired,
  onClose: PropTypes.func.isRequired
};
export default CustomPopup;