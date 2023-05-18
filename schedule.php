<center>
    <div class="container justify-content-center">
        <div class="row ">
            <div class=" col-auto">
                <div class="schedule-table  table-responsive col-lg-12">
                    <table class="table-responsive col-lg-12 bg-white justify-content-center ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>08 am</th>
                                <th>10 am</th>
                                <th>12 pm</th>
                                <th>02 pm</th>
                                <th class="last">04 pm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="day">Saturday</td>
                                <td class="active" colspan="2">
                                    <h4>Communications</h4>
                                    <p>8:30 am - 11:40 am</p>
                                    <div class="hover">
                                        <h4>Communications</h4>
                                        <p>28202</p>
                                        <span>Dr.Nabila</span>
                                    </div>
                                </td>
                                <td class="active" colspan="2">
                                    <h4>Operating System</h4>
                                    <p>12:30 pm - 03 pm</p>
                                    <div class="hover">
                                        <h4>Operating System</h4>
                                        <p>27321</p>
                                        <span>Dr.Ahmed Amer</span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">Sunday</td>
                                <td class="active">
                                    <h4>Measurment</h4>
                                    <p> 10 am - 11 am</p>
                                    <div class="hover">
                                        <h4>Measurment</h4>
                                        <p>27321</p>
                                        <span>Dr.Howida</span>
                                    </div>
                                </td>
                                <td class="active">
                                    <h4>Computer Organizaion</h4>
                                    <p>10 am - 11:40 am</p>
                                    <div class="hover">
                                        <h4>Computer Organizaion</h4>
                                        <p>27321</p>
                                        <span>Dr.Tamer</span>
                                    </div>
                                </td>
                                <td class="active" colspan="2">
                                    <h4>Integrated Circuits</h4>
                                    <p>12:30 pm - 03 pm</p>
                                    <div class="hover">
                                        <h4>Integrated Circuits</h4>
                                        <p>28202</p>
                                        <span>dr.Nisreen</span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">Monday</td>
                                <td></td>
                                <td class="active">
                                    <h4>Cycling</h4>
                                    <p>11 am - 12 pm</p>
                                    <div class="hover">
                                        <h4>Cycling</h4>
                                        <p>11 am - 12 pm</p>
                                        <span>Tabitha Potter</span>
                                    </div>
                                </td>
                                <td class="active">
                                    <h4>Karate</h4>
                                    <p>03 pm - 05 pm</p>
                                    <div class="hover">
                                        <h4>Karate</h4>
                                        <p>03 pm - 05 pm</p>
                                        <span>Lester Gray</span>
                                    </div>
                                </td>
                                <td></td>
                                <td class="active">
                                    <h4>Crossfit</h4>
                                    <p>07 pm - 08 pm</p>
                                    <div class="hover">
                                        <h4>Crossfit</h4>
                                        <p>07 pm - 08 pm</p>
                                        <span>Candi Yip</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">Tuesday</td>
                                <td class="active">
                                    <h4>Spinning</h4>
                                    <p>10 am - 11 am</p>
                                    <div class="hover">
                                        <h4>Spinning</h4>
                                        <p>10 am - 11 am</p>
                                        <span>Mary Cass</span>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="active">
                                    <h4>Bootcamp</h4>
                                    <p>05 pm - 06 pm</p>
                                    <div class="hover">
                                        <h4>Bootcamp</h4>
                                        <p>05 pm - 06 pm</p>
                                        <span>Brenda Mastropietro</span>
                                    </div>
                                </td>
                                <td class="active">
                                    <h4>Boxercise</h4>
                                    <p>07 pm - 08 pm</p>
                                    <div class="hover">
                                        <h4>Boxercise</h4>
                                        <p>07 pm - 08 pm</p>
                                        <span>Marlene Bruce</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">Wednesday</td>
                                <td colspan="5">
                                    <h1>OFF</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">Thursday</td>
                                <td colspan="5">
                                    <h1>OFF</h4>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>
<style>
    body {
        margin-top: 20px;
    }

    .schedule-table table thead tr {
        background: #86d4f5;
    }

    .schedule-table table thead th {
        padding: 25px 50px;
        color: #fff;
        text-align: center;
        font-size: 20px;
        font-weight: 800;
        position: relative;
        border: 0;
    }

    .schedule-table table thead th:before {
        content: "";
        width: 3px;
        height: 35px;
        background: rgba(255, 255, 255, 0.2);
        position: absolute;
        right: -1px;
        top: 50%;
        transform: translateY(-50%);
    }

    .schedule-table table thead th.last:before {
        content: none;
    }

    .schedule-table table tbody td {
        vertical-align: middle;
        border: 1px solid #e2edf8;
        font-weight: 500;
        padding: 30px;
        text-align: center;
    }

    .schedule-table table tbody td.day {
        font-size: 22px;
        font-weight: 600;
        background: #f0f1f3;
        border: 1px solid #e4e4e4;
        position: relative;
        transition: all 0.3s linear 0s;
    }

    .schedule-table table tbody td.active {
        position: relative;
        z-index: 10;
        transition: all 0.3s linear 0s;
        min-width: 165px;
    }

    .schedule-table table tbody td.active h4 {
        font-weight: 700;
        color: #000;
        font-size: 20px;
        margin-bottom: 5px;
    }

    .schedule-table table tbody td.active p {
        font-size: 16px;
        line-height: normal;
        margin-bottom: 0;
    }

    .schedule-table table tbody td .hover h4 {
        font-weight: 700;
        font-size: 20px;
        color: #ffffff;
        margin-bottom: 5px;
    }

    .schedule-table table tbody td .hover p {
        font-size: 16px;
        margin-bottom: 5px;
        color: #ffffff;
        line-height: normal;
    }

    .schedule-table table tbody td .hover span {
        color: #ffffff;
        font-weight: 600;
        font-size: 18px;
    }

    .schedule-table table tbody td.active::before {
        position: absolute;
        content: "";
        min-width: 100%;
        min-height: 100%;
        transform: scale(0);
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 0.25rem;
        transition: all 0.3s linear 0s;
    }

    .schedule-table table tbody td .hover {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 120%;
        height: 120%;
        transform: translate(-50%, -50%) scale(0.8);
        z-index: 99;
        background: #86d4f5;
        border-radius: 0.25rem;
        padding: 25px 0;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s linear 0s;
    }

    .schedule-table table tbody td.active:hover .hover {
        transform: translate(-50%, -50%) scale(1);
        visibility: visible;
        opacity: 1;
    }

    .schedule-table table tbody td.day:hover {
        background: #86d4f5;
        color: #fff;
        border: 1px solid #86d4f5;
    }

    @media screen and (max-width: 1199px) {
        .schedule-table {
            display: block;
            width: 100%;
            overflow-x: auto;
        }

        .schedule-table table thead th {
            padding: 25px 40px;
        }

        .schedule-table table tbody td {
            padding: 20px;
        }

        .schedule-table table tbody td.active h4 {
            font-size: 18px;
        }

        .schedule-table table tbody td.active p {
            font-size: 15px;
        }

        .schedule-table table tbody td.day {
            font-size: 20px;
        }

        .schedule-table table tbody td .hover {
            padding: 15px 0;
        }

        .schedule-table table tbody td .hover span {
            font-size: 17px;
        }
    }

    @media screen and (max-width: 991px) {
        .schedule-table table thead th {
            font-size: 18px;
            padding: 20px;
        }

        .schedule-table table tbody td.day {
            font-size: 18px;
        }

        .schedule-table table tbody td.active h4 {
            font-size: 17px;
        }
    }

    @media screen and (max-width: 767px) {
        .schedule-table table thead th {
            padding: 15px;
        }

        .schedule-table table tbody td {
            padding: 15px;
        }

        .schedule-table table tbody td.active h4 {
            font-size: 16px;
        }

        .schedule-table table tbody td.active p {
            font-size: 14px;
        }

        .schedule-table table tbody td .hover {
            padding: 10px 0;
        }

        .schedule-table table tbody td.day {
            font-size: 18px;
        }

        .schedule-table table tbody td .hover span {
            font-size: 15px;
        }
    }

    @media screen and (max-width: 575px) {
        .schedule-table table tbody td.day {
            min-width: 135px;
        }
    }
</style>