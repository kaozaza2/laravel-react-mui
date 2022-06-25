import React from 'react';
import {Grid} from '@mui/material';
import ComicItem from '@/Components/ComicItem';

export default function Main(props) {
    return (
        <Grid container spacing={2}>
            {props.comics && props.comics.map((item) => {
                return (<Grid item key={item.id} xs={6}><ComicItem comic={item} /></Grid>);
            })}
        </Grid>
    );
}
