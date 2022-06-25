import React from 'react';
import {Paper, Typography} from '@mui/material';

export default function ComicItem({comic}) {
    return (
        <Paper variant="outlined">
            <Typography variant="h5">{comic.name}</Typography>
        </Paper>
    );
}
