
import React, { useLayoutEffect, useState } from "react";
import rough from 'roughjs/bundked/rough.esm';


const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

ctx.fillStyle = "green";
ctx.fillRect(10, 10, 150, 100);