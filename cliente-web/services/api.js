import axios from 'axios';

const token = localStorage.getItem('token');

const api = axios.create({
    baseURL: 'http:localhost:8000',
    headers: {
        Authorization: `Bearer ${token}`
    }
});

api.interceptors.request.use((config) => {
  const token = localStorage.getItem('token')

  if (token) {
    config.headers.Authorization = `Bearer ${token}`
  }

  return config
}, (err) => {
  return Promise.reject(err)
})

api.interceptors.response.use((response) => {
  return response
}, (error) => {
  if (error.response.status === 401) {
    window.location = '#/home'
  }

  return Promise.reject(error)
})


export default api;