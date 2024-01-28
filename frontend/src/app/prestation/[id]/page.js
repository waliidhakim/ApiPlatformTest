// // src/app/prestation/[id]/page.js
"use client"
import React, { useState, useEffect } from 'react';
import fetchData from '@/app/lib/fetchData';
// import Calendar from '../../../../components/Calendar/Calendar';
// import TimeslotCalendar from 'react-timeslot-calendar';
import ScheduleSelector from 'react-schedule-selector'




const PrestationPage = ({ params }) => {
  const [prestation, setPrestation] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);
  const [availableDates, setAvailableDates] = useState([]);
//const router = useRouter();
  const {id} = params;

  const [schedule, setSchedule] = useState([]);

  const handleChange = newSchedule => {
    console.log("change in the table");
    console.log(newSchedule);
    setSchedule(newSchedule);
  };

  
  

  useEffect(() => {
    console.log("id prestation : ", id);
    if (params.id) {
      const fetchPrestationDetail = async () => {
        try {
          const data = await fetchData(`${process.env.NEXT_PUBLIC_API_URL}/prestations/${id}`);
          setPrestation(data);
          setLoading(false);
        } catch (error) {
          console.error('Error fetching prestation details:', error);
          setError(error);
          setLoading(false);
        }
      };
      fetchPrestationDetail();
    }
  }, [id]);

  let timeslots = [
    ["9", "10"], 
    ["10", "11"], 
    ["11", "12"],  
    ["14", "15"],  
    ["15", "16"],  
    ["16", "17"],  
  ];

  let ignoreWeekends = {
    'saturdays': false,
    'sundays': false,
    'mondays' : false,
    'saturdays' : false
  }

  let disabledTimeslots = [
    {
        startDate: 'January 26th 2024, 2:00:00 PM',
        format: 'MMMM Do YYYY, h:mm:ss A',
    },
    {
        startDate: 'January 26th 2024, 10:00:00 AM',
        format: 'MMMM Do YYYY, h:mm:ss A',
    }
    ]

    let onSelectTimeslot = (allTimeslots, lastSelectedTimeslot) => {
        console.log(lastSelectedTimeslot.startDate); // MomentJS object.
        console.log("ddddd"); // MomentJS object.
      
      }
    let timeslotProps = {
        format: 'h', // Each element in the timeslot array is an Hour
        showFormat: 'h:mm A', // They will be displayed as Hour:Minutes AM/PM
    }

  if (loading) return <div>Loading...</div>;
  if (error) return <div>Error: {error.message}</div>;

  return (
    <div>
      {prestation && (
        <>
          <h1>{prestation.name} prestation</h1>
          <img src="https://challange-esgi.s3.eu-central-1.amazonaws.com/users/125.jpg" alt={prestation.name} />
          <p>{prestation.description}</p>
          <p>Prix: {prestation.price}</p>
          <p>Establishment: {prestation.establishment.name}</p>
          <p>Establishment address: {prestation.establishment.address}</p>
          {/* <Calendar /> */}
          {/* <TimeslotCalendar
                 initialDate={moment().format()} 
                 timeslots={timeslots}
                 disabledTimeslots= {disabledTimeslots}
                 maxTimeslots = "2"
                 renderDays={ignoreWeekends}
                 onSelectTimeslot = {onSelectTimeslot}
                timeslotProps = {timeslotProps}
                //  onTimeslotClick={(timeslot) => {
                //     console.log('Selected timeslot:', timeslot);
                    
                //   }}
                 
        
          /> */}
          <ScheduleSelector
            selection={schedule}
            numDays={5}
            minTime={8}
            maxTime={17}
            hourlyChunks={1}
            dateFormat={'MMMM Do'}
            onChange={handleChange}
          />

        </>
      )}
    </div>
  );
};

export default PrestationPage;





