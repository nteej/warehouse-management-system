<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(3) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 27px;
            line-height: 48px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(3) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(3) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <span>ECO CLEANING</span>
                        </td>

                        <td style="text-align: right">
                            Numri Fatures #: ______
                            <br> Data: {{$date}}

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <table>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                ECO CLEANING.
                                <br> Rruga Reshit Petrela,
                                <br> Kompleksi Usluga, Pallati Nr.53
                            </td>

                            <td style="text-align: right">
                                <b>Fature Shitje</b>
                                <br> {{$agjenti}}
                                <br> info@ecocleaning.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </table>
    <table>
        <tr class="heading">
            <td>
                Produkti
            </td>

            <td>
                Sasia
            </td>

            <td>
                Cmimi Blerje
            </td>

            <td>
                Cmimi Shitje
            </td>

            <td>
                Vlera Shitje
            </td>
        </tr>
        @foreach($data as $item)
            <tr class="item">
                <td>
                    {{$item->product_name}}
                </td>

                <td>
                    {{$item->sasia}}
                </td>

                <td style="text-align : right">
                    {{$item->cmim_blerje}}
                </td>

                <td style="text-align : right">
                    {{$item->cmim_shitje}}
                </td>

                <td style="text-align : right">
                    {{$item->cmim_shitje * $item->sasia}}
                </td>
            </tr>
        @endforeach
        <tr class="total">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align : right">
                Totali: <b>{{$total}}</b>
            </td>
        </tr>
    </table>
</div>
</body>
</html>