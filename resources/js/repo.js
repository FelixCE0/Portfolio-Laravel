// fetch("https://ik.imagekit.io/eelwnx7j9/repos.json?updatedAt=1698677829636")
//   .then((res) => res.json())
//   .then((data) => {
//     let output = "";
//     data.forEach(function (repo) {
//       output += `
//       <div class="flex flex-col rounded-md border-2 bg-white flex-1">
//         <img src="${repo.banner}">
//         <!-- Article -->
//         <article class="ml-10">
//           <header>
//             <span class="mt-2 flex">
//               <div class="flex justify-start">
//                 <div class="p-4 shadow-sm w-4 h-4 rounded-full lang-color" style="background-color: ${repo.color};"></div>
//                 <span>${repo.lang}</span>
//               </div>
//               <div class="flex justify-end w-full">
//                 <div class="rounded-full w-10 h-10 github-icon bg-gray-800">
//                   <div class="github-icon-bg">
//                     <i class="mdi mdi-github"></i>
//                   </div>
//                 </div>
//               </div>
//             </span>
//             <a href="${repo.url}">
//               <h4 class="mt-15 mb-20">${repo.name}</h4>
//             </a>`;
//       if (repo.live_url !== 'none') {
//         output += `
//               <a href="${repo.live_url}">
//                 <span class="mt-15 mb-20">${repo.live_url}</span>
//               </a>`;
//       }
//       output += `
//             <div class="h-10"></div>
//           </header> 
//           <p class="mb-10">${repo.description}</p>
//         </article>
//         <div class="flex flex-1 flex-col justify-between">
//           <div></div>
//           <div class="flex" style="border-top: 1px solid rgb(156 163 175);">
//             <img class="mt-2 ml-10 mr-5"src="https://ik.imagekit.io/eelwnx7j9/star.svg"/>
//             <span class="mt-2">${repo.stars}</span>
//             <img class="mt-2 mr-5 ml-5"src="https://ik.imagekit.io/eelwnx7j9/fork.svg"/>
//             <span class="mt-2">${repo.forks}</span>
//           </div>
//         </div>
//       </div>`;
//     });
//     document.getElementById("repo-card").innerHTML = output;
//   });
