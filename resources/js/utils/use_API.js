import { useState, useEffect } from 'react';

/**
 * Custom hook for call API
 * Return response, also can pass setRefRes for return ressponse as reference variable
 * @param {*} setRefRes: setRefRes function, typically have setState inside
 */
const use_API = (url, setRefRes = null, options = null) => {
    const [loading, setLoading] = useState(true);
    const [res, setRes] = useState(null);
    useEffect(() => {
        console.log('Send API from custom hook...');
        fetch(url, options)
        .then(res => res.json())
        .then(res => {
            setRefRes(res);
            setRes(res);
            setLoading(false);
        });
    }, [url, options]);
    return { loading, res }
}
export default use_API;