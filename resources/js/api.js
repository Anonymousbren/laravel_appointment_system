import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000/api';
axios.defaults.withCredentials = true;

const fetchAppointments = async () => {
  try {
    const response = await axios.get('/appointments');
    console.log(response.data);
  } catch (error) {
    console.error('Error fetching appointments', error);
  }
};

export { fetchAppointments };

