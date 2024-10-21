<div x-data="{
    simpleAlert() {
        Swal.fire('SweetAlert2 is working!');
    },
    customHtmlAlert() {
        Swal.fire({
            title: '<strong>HTML <u>example</u></strong>',
            icon: 'info',
            html: `You can use <b>bold text</b>, <a href='#' autofocus>links</a>, and other HTML tags`,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: `<i class='fa fa-thumbs-up'></i> Great!`,
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText: `<i class='underline'>Good</i>`,
            cancelButtonAriaLabel: 'Thumbs down'
          });
    },
    customImage() {
        Swal.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image'
        });
    },
    reallyCustomized() {
        Swal.fire({
            title: 'Custom width, padding, color, background.',
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff url(/images/trees.png)',
            backdrop: `
              rgba(0,0,123,0.4)
              url('/images/nyan-cat.gif')
              left top
              no-repeat
            `
        });
    },
    useTemplate() {
        Swal.fire({
            template: '#my-template',
            showCloseButton: true,
            showConfirmButton: false,
        });
    }
}">
    <button @click="useTemplate()">Sweet Alert Button</button>
</div>

<template id="my-template">
    <swal-html>
        <div class='mt-5'>
            <div class='py-5 w-4/5 mx-auto'>
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none"><path d="M31.4388 11.7337L28.9713 9.26624L17.8763 20.3612L20.3438 22.8287L31.4388 11.7337ZM38.8587 9.26624L20.3438 27.7812L13.0288 20.4837L10.5613 22.9512L20.3438 32.7337L41.3438 11.7337L38.8587 9.26624ZM0.65625 22.9512L10.4388 32.7337L12.9062 30.2662L3.14125 20.4837L0.65625 22.9512Z" fill="#9CA3AF"/></svg>
                <div class="mt-4">
                    <p class="text-gray-500 font-bold">Your reservation is successful</p>
                    <p class="text-gray-500">The timer has started, please proceed to payment to avoid cancellation.</p>
                </div>
            </div>
            <div class="mt-4 flex justify-center items-center gap-4">
                <button class="px-3 py-2 rounded-md bg-[#0E9F6E] text-white font-medium">My Bookings Page</button>
                <button class="px-3 py-2 rounded-md border border-gray-300 bg-white text-gray-800 font-medium">Proceed Payment</button>
            </div>
        </div>
    </swal-html>
</template>