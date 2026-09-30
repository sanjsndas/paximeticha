<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet" />
    <title>Paximeticha - Your request has been accepted!</title>
    <meta property="og:title" content="Paximeticha - Your request has been accepted!" />
    <meta property="og:image" content="icon.svg" />
    
    <meta property="og:description" content="Paximeticha - Your request has been accepted!" />
    <meta name="description" content="Paximeticha - Your request has been accepted!" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    

    <style>
      :root{
        --cb-1: #0f2480;
        --cb-2: #f97616;
        --cb-3: #3554d1;
        --cb-4: #7D74B5;
        --cb-5: #f9bc16;
      }

      *{
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body{
        direction: ltr;
        font-family: 'Saira Condensed', sans-serif !important;
        font-size: clamp(13px, 4vw, 18px);
        margin: 0;
        padding: 0px;
        line-height: 1.2;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      p{
        padding: 0;
        margin: 0;
      }

      p, li{
        padding: 10px 0;
        line-height: 2.4;
      }

      li{
        margin: 0 10px;
      }

      a{
        text-decoration: none;
        color: inherit;
        cursor: pointer;
      }

      img{
        display: block;
        max-width: 100%;
        max-height: 100%;
      }

      ul{
        margin: 0;
        padding: 0;
      }

      .container{
        width: auto;
        padding-right: 19px;
        padding-left: 19px;
        margin-right: auto;
        margin-left: auto;
      }

      @media screen and (min-width: 480px) {
        .container{
        max-width: 450px;
        }
      }
      @media screen and (min-width: 575px){
        .container{
          max-width: 540px;
        }
      }
      @media screen and (min-width: 768px) {
        .container{
        max-width: 730px;
        }
      }
      @media screen and (min-width: 992px) {
        .container{
          max-width: 960px;
        }
      }

      @media screen and (min-width: 1200px){
        .container{
          max-width: 1170px;
          }
      }

      @media (min-width: 1400px){
        .container{
          max-width: 1274px;
        }
      }

      .privacy__block{
        padding: 72px 0;
        overflow: hidden;
        width: 100%;
      }

      .content-privacy{
        opacity: 0.8;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
        text-align: justify;
      }

      .content-privacy a{
        transition: 0.3s ease;
        color: #060606;
      }

      .content-privacy a:hover{
        opacity: 0.5;
      }

      .content-privacy li {
      list-style: circle;
      margin: 0 23px;
      padding:  10px 0;
    }
    .content-privacy p {
      padding:  10px 0;
    }
      .header-background{
        direction: initial;
        position: relative;
        width: 100%;
        background-position: center;
        background-size: cover;
      }

      .header-background::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 70%;
        height: 100%;
        background-image: url(pics/calm-tech-background.webp);
        background-position: center;
        clip-path: polygon(0% 100%, 100% 100%, 100% 0%, 50% 0%);
        background-size: cover;
        filter: brightness(0.8);
        z-index: -1;
        animation: backgroundAnimation 10s infinite ease;
      }

      @keyframes backgroundAnimation {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .header{
        padding: 25px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 38px;
      }

      .logo-header{
        gap: 10px;
        flex-direction: row;
        display: flex;
        align-items: center;
      }

      .logoImg-header img{
        width: 35px;
      }

      .logoTitle-header h2{
        -webkit-text-stroke: 1px var(--cb-5);
        text-transform: uppercase;
        transition: 0.3s ease;
        color: #fff;
        font-size: clamp(14px, 4vw, 18px);
        margin: 0;
      }

      .logoTitle-header h2:hover{
        opacity: 0.5;
      }

      .nav-toggle {
        cursor: pointer;
        width: 25px;
        height: 25px;
        position: relative;
        z-index: 100;
        overflow: hidden;
      }

      .nav-toggle span {
        width: 16px;
        height: 2px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        transition: all 0.5s;
      }

      .nav-toggle span:nth-of-type(2) {
        top: calc(50% - 7px);
      }

      .nav-toggle span:nth-of-type(3) {
        top: calc(50% + 7px);
      }

      .nav-toggle.active span:nth-of-type(1) {
        display: none;
      }

      .nav-toggle.active span:nth-of-type(2) {
        background-color: #fff;
        top: 50%;
        transform: translate(-50%, 0%) rotate(45deg);
      }

      .nav-toggle.active span:nth-of-type(3) {
        background-color: #fff;
        top: 50%;
        transform: translate(-50%, 0%) rotate(-45deg);
      }

      .nav-panel {
        z-index: 99;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.9;
        padding: 16px 38px;
        background:  var(--cb-5);
        transform: translateX(-110%);
        transition: transform 0.5s;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .nav-panel.active {
        transform: translateX(0);
      }

      .nav-panel nav {
        display: flex;
        justify-content: start;
        align-items: center;
        height: 100vh;
      }

      .nav-panel ul {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        padding: 0;
      }

      .nav-panel li {
        margin: 0;
        padding: 0;
        list-style-type: none;
      }

      .nav-link {
        transition: 0.3s ease;
        font-weight: bold;
        text-align: center;
        font-size: clamp(18px, 4vw, 22px);
        color: #fff;
      }

      .nav-link:hover {
        opacity: 0.5;
      }

      .header-content{
        padding: 113px 0;
        display: flex;
        flex-direction: column;
        width: 40%;
        align-items: start;
        gap: 25px;
      }

      .header-content h1{
        text-transform: uppercase;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 50px);
        color: var(--cb-5);
      }

      .header-content h1::first-line {
        color: var(--cb-4);
      }

      .header-content p{
        padding: 0;
        font-size: clamp(18px, 4vw, 20px);
        color: #060606;
      }

      .land-button{
        border-radius: 25px;
        border: 1px solid var(--cb-5);
        cursor: pointer;
        font-weight: bold;
        transition: 0.5s ease;
        padding: 10px 16px;
        font-size: clamp(14px, 4vw, 16px);
        text-align: center;
        background-color: transparent;
        color: var(--cb-5);
      }

      .land-button:hover{
        color: #fff;
        background-color: var(--cb-5);
      }

      .about{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        gap: 72px;
        padding: 72px 0;
      }

      .about-img{
        flex: 1;
      }

      .about-img img{
        height: 100%;
        object-fit: cover;
        width: 100%;
      }

      .about-content{
        padding: 38px 0;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 25px;
        justify-content: center;
      }

      .about-content h2{
        line-height: normal;
        border-left: 4px solid var(--cb-4);
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .about-content p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .service{
        display: flex;
        flex-direction: column;
        gap: 72px;
        padding: 72px 0;
      }

      .service-title{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
      }

      .service-title h2{
        line-height: normal;
        border-left: 4px solid var(--cb-4);
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .service-title p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .service-box{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
      }

      .service-card{
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .service-card img{
        width: 100%;
        height: 248px;
        object-fit: cover;
      }

      .service-card h5{
        font-weight: normal;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .our-pricing{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        padding: 72px 0;
      }

      .pricing-box{
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        gap: 25px;
      }

      .pricing-card{
        display: flex;
        flex-direction: column;
      }

      .pricing-title{
        background-color: var(--cb-1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 10px;
        padding: 23px;
      }

      .pricing-title span{
        line-height: normal;
        color: #fff;
        font-size: clamp(22px, 4vw, 30px);
      }

      .pricing-title h2{
        font-weight: bold;
        text-transform: uppercase;
        font-size: clamp(18px, 4vw, 22px);
        color: #fff;
      }

      .pricing-content{
        transition: 0.3s ease;
        background-color: var(--cb-4);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
        padding: 25px;
      }

      .pricing-box:hover .pricing-content{
        background-color: #257A3E;
      }

      .pricing-content h5{
        font-weight: bold;
        font-size: clamp(30px, 4vw, 50px);
        color: #fff;
      }

      .pricing-content span{
        border-radius: 25px;
        background-color: #fff;
        height: 4px;
        width: 49px;
      }

      .pricing-list{
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      .pricing-item{
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px)
      }

      .pricing-box .land-button{
        margin: 0 auto;
        transition: 0.3s ease !important;
        color: #fff !important;
        background-color: var(--cb-5) !important;
      }

      .pricing-box:hover .land-button{
        border: 1px solid #257A3E !important;
        background-color: #257A3E !important;
      }

      .article-content{
        padding: 72px 0;
        display: flex;
        flex-direction: column;
        gap: 72px;
        position: relative;
      }

      .article-content h1{
        direction: initial;
        line-height: normal;
        border-left: 4px solid var(--cb-4);
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .article-section{
        display: flex;
        flex-direction: row;
        gap: 38px;
        position: relative;
      }

      .article-image{
        position: relative;
        flex: 1;
      }

      .article-image img{
        object-fit: contain;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        width: 100%;
        position: sticky;
        top: 72px;
      }

      .article-box{
        flex: 2;
        display: flex;
        flex-direction: column;
        gap: 25px;
      }

      .article-text {
        color: #060606;
        font-size: clamp(16px, 4vw, 18px);
      }

      .article-text ul {
        list-style: inside;
      } 
      .article-cost {
        margin-top: 38px;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
      }

      .article-cost h5{
        color: var(--cb-5);
        font-size: clamp(30px, 4vw, 40px);
        font-weight: bold;
      }

      .our-history{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        gap: 72px;
        padding: 72px 0;
      }

      .history-content{
        padding: 38px 0;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 25px;
        justify-content: center;
      }

      .history-content h2{
        line-height: normal;
        border-left: 4px solid var(--cb-4);
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .history-content p{
        padding: 0;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
      }

      .history-img-box{
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
        flex-direction: row-reverse;
      }

      .history-img{
        flex: 1;
        height: 100%;
      }

      .history-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .history-img:last-child{
        height: 80%;
      }

      .stats-lay{
        background-color: var(--cb-4);
      }

      .stats{
        padding: 72px 0;
        display: flex;
        flex-direction: column;
        gap: 72px;
      }

      .stats h2{
        margin: 0 auto;
        text-align: center;
        line-height: normal;
        border-left: 4px solid #fff;
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #fff;
      }

      .stats-box{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
      }

      .stats-card{
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .stats-card svg{
        width: 54px;
        height: 54px;
        fill: #fff;
      }

      .stats-card h5{
        font-weight: bold;
        color: #fff;
        font-size: clamp(30px, 4vw, 40px);
      }

      .stats-card h1{
        font-weight: normal;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .feedback{
        padding: 72px 0;
        display: flex;
        flex-direction: column;
        gap: 72px;
      }

      .feedback h2{
        margin: 0 auto;
        line-height: normal;
        border-left: 4px solid var(--cb-4);
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #060606;
      }

      .feedback-container {
        border: 2px solid #060606;
        direction: initial;
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
      }

      .feedback-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
      }

      .feedback-card {
        min-width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 16px;
        padding: 25px;
      }

      .feedback-card img {
        width: 157px;
        height: 157px;
        object-fit: cover;
      }

      .feedback-card-box{
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 10px;
      }

      .feedback-card-box h5 {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
      }

      .feedback-card-box h5 span{
        color: #060606;
        font-size: clamp(18px, 4vw, 22px);
      }

      .feedback-card-box h5 hr{
        border: none;
        border-radius: 25px;
        background-color: var(--cb-4);
        height: 4px;
        width: 25px;
      }

      .feedback-card-box p {
        opacity: 0.8;
        font-size: clamp(16px, 4vw, 18px);
        color: #060606;
        padding: 0;
      }

      .contacts-box{
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
        padding-top: 72px;
      }

      .maps{
        flex: 1;
      }

      .maps iframe{
        height: 100%;
      }

      .fields-form-lay{
        flex: 1;
        background-color: var(--cb-4);
        padding: 25px;
      }

      .fields-form {
        display: flex;
        flex-direction: column;
      }

      .fields-title{
        direction: initial;
        margin-bottom: 38px;
        line-height: normal;
        border-left: 4px solid #fff;
        padding-left: 4px;
        font-weight: bold;
        font-size: clamp(30px, 4vw, 40px);
        color: #fff;
      }

      .input-container {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .input-container label{
        color: #fff;
      }

      .input-container .input-main_groupelement, .input-container .textarea-main_groupelement, .form button {
        outline: none;
        margin: 10px 0;
      }

      .input-container .input-main_groupelement {
        border: none;
        color: #060606;
        background-color: #fff;
        padding: 16px;
        font-size: 16px;
        line-height: 18px;
      }

      .input-container .textarea-main_groupelement {
        border: none;
        color: #060606;
        background-color: #fff;
        padding: 16px;
        font-size: 16px;
        line-height: 18px;
        resize: vertical;
        min-height: 38px;
        max-height: 124px;
      }

      .input-container .input-main_groupelement::placeholder, .input-container .textarea-main_groupelement::placeholder{
        color: #060606;
      }

      .check{
        transition: 0.3s ease;
        color: #fff;
      }

      .check:hover{
        opacity: 0.5;
      }

      .form-check {
        color: #fff;
        display: flex;
        align-items: center;
        gap: 10px;
        justify-content: flex-start;
        padding: 16px 0;
      }

      .form-check .form-check-input{
        margin: 0;
      }

      .fields-form .land-button{
        border: 1px solid var(--cb-1) !important;
        background-color: var(--cb-1) !important;
        color: #fff !important;
      }

      .ui-checkbox {
        --primary-color: #1677ff;
        --secondary-color: #fff;
        --primary-hover-color: #4096ff;
        --checkbox-diameter: 20px;
        --checkbox-border-radius: 5px;
        --checkbox-border-color: #d9d9d9;
        --checkbox-border-width: 1px;
        --checkbox-border-style: solid;
        --checkmark-size: 1.2;
      }

      .ui-checkbox,
      .ui-checkbox *,
      .ui-checkbox *::before,
      .ui-checkbox *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      .ui-checkbox {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: var(--checkbox-diameter);
        height: var(--checkbox-diameter);
        border-radius: var(--checkbox-border-radius);
        background: var(--secondary-color);
        border: var(--checkbox-border-width) var(--checkbox-border-style) var(--checkbox-border-color);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        cursor: pointer;
        position: relative;
      }

      .ui-checkbox::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        box-shadow: 0 0 0 calc(var(--checkbox-diameter) / 2.5) var(--primary-color);
        border-radius: inherit;
        opacity: 0;
        -webkit-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        -o-transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
        transition: all 0.5s cubic-bezier(0.12, 0.4, 0.29, 1.46);
      }

      .ui-checkbox::before {
        top: 40%;
        left: 50%;
        content: "";
        position: absolute;
        width: 4px;
        height: 7px;
        border-right: 2px solid var(--secondary-color);
        border-bottom: 2px solid var(--secondary-color);
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(0);
        transform: translate(-50%, -50%) rotate(45deg) scale(0);
        opacity: 0;
        -webkit-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        -o-transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
        transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6),opacity 0.1s;
      }

      .ui-checkbox:hover {
        border-color: var(--primary-color);
      }

      .ui-checkbox:checked {
        background: var(--primary-color);
        border-color: transparent;
      }

      .ui-checkbox:checked::before {
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -ms-transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        transform: translate(-50%, -50%) rotate(45deg) scale(var(--checkmark-size));
        -webkit-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        -o-transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
        transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
      }

      .ui-checkbox:active:not(:checked)::after {
        -webkit-transition: none;
        -o-transition: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        transition: none;
        opacity: 1;
      }

      .site-footer {
        background-color: var(--cb-4);
        padding: 25px 0;
      }

      .footer-content {
        display: flex;
        flex-direction: column;
        gap: 25px;
      }

      .footer-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        gap: 25px;
      }

      .contact-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .contact-info a {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
        transition: 0.3s ease;
      }

      .contact-info a h5{
        word-break: break-all;
        flex: 1;
        font-weight: normal;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .contact-info a svg{
        fill: #fff;
        width: 23px;
        height: 23px;
      }

      .contact-info a:hover {
        opacity: 0.5;
      }

      .contact-info ;
        color: #fff;
        opacity: 0.8;
      }

      .contact-info .contact-info__id::before {
        content: "";
        flex: 0 0 23px;
        width: 23px;
      }

      .contact-info .contact-info__id span {
        flex: 1;
        font-size: clamp(14px, 3.6vw, 16px);
        line-height: 1.5;
        word-break: break-word;
      }

      .policy-links {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .policy-links a {
        transition: 0.3s ease;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .policy-links a:hover {
        opacity: 0.5;
      }

      .footer-content p {
        border-top: 0.2px solid #fff;
        padding: 0;
        padding-top: 25px;
        text-align: center;
        color: #fff;
        font-size: clamp(16px, 4vw, 18px);
      }

      .flex-col{
        display: flex;
        flex-direction: column;
      }

      @media (max-width: 1199px) {
        .header-background::before{
          width: 60%;
        }
      }

      @media (max-width: 991px) {
        .header-background::before{
          display: none;
        }

        .header-background{
          background-color: #e9eefc;
        }

        .header-content{
          width: 100%;
        }

        .nav-toggle span{
          background-color: var(--cb-5);
        }

        .service-box{
          grid-template-columns: repeat(2, 1fr);
        }

        .our-pricing{
          grid-template-columns: repeat(1, 1fr);
        }

        .stats-box{
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 767px) {
        .service-box{
          grid-template-columns: repeat(1, 1fr);
        }

        .about{
          flex-direction: column;
        }

        .about-content{
          padding: 0;
        }

        .about-img img{
          max-height: 50vh;
        }

        .article-section{
          flex-direction: column;
        }

        .article-image img{
          position: relative;
          top: 0;
        }

        .our-history{
          flex-direction: column;
        }

        .history-content{
          padding: 0;
        }

        .history-img:last-child{
          display: none;
        }

        .history-img img{
          max-height: 50vh;
        }

        .contacts-box{
          flex-direction: column;
        }

        .fields-form-lay{
          padding: 72px 0;
        }

        .maps iframe{
          height: revert-layer;
        }

        .feedback-card-box h5 hr{
          display: none;
        }

        .feedback-card{
          flex-direction: column;
        }

        .feedback-card img{
          width: 100%;
          height: 248px;
        }

      }

      @media (max-width: 576px){
        .container-comments{
          margin: 0;
        }
        .stats-box{
          grid-template-columns: repeat(1, 1fr);
        }

        .footer-header{
          align-items: stretch;
          flex-direction: column;
        }

        .feedback-card{
          padding: 0;
        }

        .feedback-container{
          border: none;
        }
      }

      @media (max-width: 400px){
        .container-comments{
          margin: 0;
        }
      }
    
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>

    
  </head>
  <body>
    
    <div class="header-background order__popupph">
      <header class="header">
        <a class="logo-header" href="./">
          <div class="logoImg-header"><img src="icon.png" alt="" /></div>
          <div class="logoTitle-header"><h2>Paximeticha</h2></div>
        </a>
        <div class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="nav-panel">
          <nav>
            <ul>
              <li><a class="nav-link" href="./">Home</a></li>
              <li><a class="nav-link" href="./#aboutus">About us</a></li>
              <li><a class="nav-link" href="./#serv">Our Services</a></li>
              
              <li><a class="nav-link" href="./#comm">Comments</a></li>
              
            </ul>
          </nav>
        </div>
      </header>
      <div class="container">
        <div class="header-content">
          <h1>Reliable power for your vehicle every day</h1>
          <p>We are attentive, competent, stable...</p>
           
          <a href="./#form-land" class="land-button">Specialist consultation</a>
          
        </div>
      </div>
    </div>
    <script>
      let navToggle = document.querySelector('.nav-toggle');
      let navPanel = document.querySelector('.nav-panel');
      let navLinks = document.querySelectorAll('.nav-link');
      let body = document.body;

      function closeNavPanel() {
        navToggle.classList.remove('active');
        navPanel.classList.remove('active');
        body.style.overflow = 'auto';
      }

      navToggle.addEventListener('click', function () {
        let isActive = navPanel.classList.toggle('active');
        navToggle.classList.toggle('active', isActive);
        body.style.overflow = isActive ? 'hidden' : 'auto';
      });

      navLinks.forEach(function (link) {
        link.addEventListener('click', closeNavPanel);
      });
    </script>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-offer-labelst{
		margin: 0px;
		padding: 0px;
		font-family: 'Nanum Myeongjo', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 278px 0px;
	}
	.bodyClass1-offer-labelst{
		background: #f6f5f5;
		color: #ffffff;
	}
	.bodyClass2-offer-labelst{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-offer-labelst{
		background: #fff;
		color: #111;
	}
	.wrapage-block-offer-labelst{
		background-size: 100%;
		width: 100%;
	}
	.box_main-offer-labelst{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-offer-labelst h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-offer-labelst p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-offer-labelst{
		text-align: center;
	}
	.mainBlock-offer-labelst ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-offer-labelst ul>li span{
		font-weight: bold;
	}
	.mainBlock-offer-labelst{
		max-width: 803px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-offer-labelst .cBlock-offer-labelst{
		text-align: center;
	}

	.bodyClass3-offer-labelst .mainBlock-offer-labelst{
		background: none;
		border-top: 2px dotted #f1d4d4;
		border-bottom: 2px dotted #f1d4d4;
	}
	.bodyClass2-offer-labelst .mainBlock-offer-labelst{
		background: #0A043C;
		color: #fff !important;
		box-shadow: 0px 0px 10px #0A043C;
	}
	.bodyClass2-offer-labelst .mainBlock-offer-labelst p{
		color: #fff !important;
	}
	.bodyClass1-offer-labelst .mainBlock-offer-labelst{
		background: #075430;
		color: #ffffff;
		border-left: 4px solid #222831;
	}
	.bodyClass1-offer-labelst .mainBlock-offer-labelst p{
		color: #ffffff !important;
	}
	.order-offer-labelst{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-offer-labelst p{
			padding: 0px 15px;
		  }
		  .box_main-offer-labelst h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-offer-labelst{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-offer-labelst{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-offer-labelst" id="mainWrapp-offer-labelst">


	<div class="wrapage-block-offer-labelst">
		<div class="box_main-offer-labelst">
			<div class="mainBlock-offer-labelst">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-offer-labelst">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



    <div class="site-footer offer--cardme">
      <div class="container">
        <div class="footer-content">
          <div class="footer-header">
            <div class="policy-links">
              <a href="privacyPolicy.html">Privacy policy</a>
              <a href="terms-of-service.html">Terms & Conditions</a>
              <a href="disclaimer.html">Disclaimer</a>
                
            </div>
            
          </div>
          <p>&#169; 2026 Paximeticha</p>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const contactInfo = document.querySelector(".contact-info");
        const policyLinks = document.querySelector(".policy-links");
        
        if (!contactInfo && policyLinks) {
            policyLinks.style.display = "flex";
            policyLinks.style.flexDirection = "row";
            policyLinks.style.flexWrap = "wrap";
        }
    });
    </script>

    

</body>
</html>
