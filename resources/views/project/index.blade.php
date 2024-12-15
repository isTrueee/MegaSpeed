<x-layout.default>
  <div x-data="projects">
    <div class="flex flex-wrap items-center justify-between gap-4">
      <h2 class="text-xl">Projects</h2>
      <div class="flex flex-col w-full gap-4 sm:flex-row sm:items-center sm:gap-3 sm:w-auto">
        <div class="flex gap-3">
          <div>
            <button type="button" class="btn btn-primary" @click="editProject">
							<svg class="w-5 h-5 ltr:mr-2 rtl:ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path fill="#fff" fill-rule="evenodd" d="M12.25 2.834c-.46-.078-1.088-.084-2.22-.084-1.917 0-3.28.002-4.312.14-1.012.135-1.593.39-2.016.812-.423.423-.677 1.003-.812 2.009-.138 1.028-.14 2.382-.14 4.29v4c0 1.906.002 3.26.14 4.288.135 1.006.389 1.586.812 2.01.423.422 1.003.676 2.009.811 1.028.139 2.382.14 4.289.14h4c1.907 0 3.262-.002 4.29-.14 1.005-.135 1.585-.389 2.008-.812.423-.423.677-1.003.812-2.009.138-1.027.14-2.382.14-4.289v-.437c0-1.536-.01-2.264-.174-2.813h-3.13c-1.133 0-2.058 0-2.79-.098-.763-.103-1.425-.325-1.954-.854-.529-.529-.751-1.19-.854-1.955-.098-.73-.098-1.656-.098-2.79V2.835Zm1.5.776V5c0 1.2.002 2.024.085 2.643.08.598.224.891.428 1.094.203.204.496.348 1.094.428.619.083 1.443.085 2.643.085h2.02a45.815 45.815 0 0 0-1.17-1.076l-3.959-3.563A37.2 37.2 0 0 0 13.75 3.61Zm-3.575-2.36c1.385 0 2.28 0 3.103.315.823.316 1.485.912 2.51 1.835l.107.096 3.958 3.563.125.112c1.184 1.065 1.95 1.754 2.361 2.678.412.924.412 1.954.411 3.546v.661c0 1.838 0 3.294-.153 4.433-.158 1.172-.49 2.121-1.238 2.87-.749.748-1.698 1.08-2.87 1.238-1.14.153-2.595.153-4.433.153H9.944c-1.838 0-3.294 0-4.433-.153-1.172-.158-2.121-.49-2.87-1.238-.748-.749-1.08-1.698-1.238-2.87-.153-1.14-.153-2.595-.153-4.433V9.944c0-1.838 0-3.294.153-4.433.158-1.172.49-2.121 1.238-2.87.75-.749 1.701-1.08 2.878-1.238 1.144-.153 2.607-.153 4.455-.153h.202Z" clip-rule="evenodd"/>
								<path fill="#fff" fill-rule="evenodd" d="M12 8.75a.75.75 0 0 1 .75.75v2.75H15.5a.75.75 0 0 1 0 1.5H12.75V16.5a.75.75 0 0 1-1.5 0v-2.75H8.5a.75.75 0 0 1 0-1.5h2.75V9.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" style="transform: translate(-2px, 2px);"/>
							</svg>	
              Add Project
            </button>
            <div class="fixed inset-0 bg-[black]/60 z-[999] overflow-y-auto hidden" :class="addProjectModal && '!block'">
              <div class="flex items-center justify-center min-h-screen px-4" @click.self="addProjectModal = false">
                <div x-show="addProjectModal" x-transition x-transition.duration.300 class="panel border-0 p-0 rounded-lg overflow-hidden md:w-full max-w-lg w-[90%] my-8">
                  <button type="button" class="absolute top-4 ltr:right-4 rtl:left-4 text-white-dark hover:text-dark" @click="addProjectModal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </button>
                  <h3 class="text-lg font-medium bg-[#fbfbfb] dark:bg-[#121c2c] ltr:pl-5 rtl:pr-5 py-3 ltr:pr-[50px] rtl:pl-[50px]" x-text="params.id ? 'Edit Project' : 'Add Project'"></h3>
                  <div class="p-5">
                    <form @submit.prevent="saveProject">
                      <div class="mb-5">
                        <label for="name">Name</label>
                        <input id="name" type="text" placeholder="Enter Name" class="form-input" x-model="params.name" />
                      </div>
                      <div class="mb-5">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Enter Email" class="form-input" x-model="params.email" />
                      </div>
                      <div class="mb-5">
                        <label for="number">Phone Number</label>
                        <input id="number" type="text" placeholder="Enter Phone Number" class="form-input" x-model="params.phone" />
                      </div>
                      <div class="mb-5">
                        <label for="occupation">Occupation</label>
                        <input id="occupation" type="text" placeholder="Enter Occupation" class="form-input" x-model="params.role" />
                      </div>
                      <div class="mb-5">
                        <label for="address">Address</label>
                        <textarea id="address" rows="3" placeholder="Enter Address" class="form-textarea resize-none min-h-[130px]" x-model="params.location"></textarea>
                      </div>
                      <div class="flex items-center justify-end mt-8">
                        <button type="button" class="btn btn-outline-danger" @click="addProjectModal = false">Cancel</button>
                        <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4" x-text="params.id ? 'Update' : 'Add'"></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button type="button" class="p-2 btn btn-outline-primary" :class="{ 'bg-primary text-white': displayType === 'list' }" @click="setDisplayType('list')">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                <path d="M2 5.5L3.21429 7L7.5 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.5" d="M2 12.5L3.21429 14L7.5 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M2 19.5L3.21429 21L7.5 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M22 19L12 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path opacity="0.5" d="M22 12L12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M22 5L12 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </button>
          </div>
          <div>
            <button type="button" class="p-2 btn btn-outline-primary" :class="{ 'bg-primary text-white': displayType === 'grid' }" @click="setDisplayType('grid')">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                <path opacity="0.5" d="M2.5 6.5C2.5 4.61438 2.5 3.67157 3.08579 3.08579C3.67157 2.5 4.61438 2.5 6.5 2.5C8.38562 2.5 9.32843 2.5 9.91421 3.08579C10.5 3.67157 10.5 4.61438 10.5 6.5C10.5 8.38562 10.5 9.32843 9.91421 9.91421C9.32843 10.5 8.38562 10.5 6.5 10.5C4.61438 10.5 3.67157 10.5 3.08579 9.91421C2.5 9.32843 2.5 8.38562 2.5 6.5Z" stroke="currentColor" stroke-width="1.5" />
                <path opacity="0.5" d="M13.5 17.5C13.5 15.6144 13.5 14.6716 14.0858 14.0858C14.6716 13.5 15.6144 13.5 17.5 13.5C19.3856 13.5 20.3284 13.5 20.9142 14.0858C21.5 14.6716 21.5 15.6144 21.5 17.5C21.5 19.3856 21.5 20.3284 20.9142 20.9142C20.3284 21.5 19.3856 21.5 17.5 21.5C15.6144 21.5 14.6716 21.5 14.0858 20.9142C13.5 20.3284 13.5 19.3856 13.5 17.5Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M2.5 17.5C2.5 15.6144 2.5 14.6716 3.08579 14.0858C3.67157 13.5 4.61438 13.5 6.5 13.5C8.38562 13.5 9.32843 13.5 9.91421 14.0858C10.5 14.6716 10.5 15.6144 10.5 17.5C10.5 19.3856 10.5 20.3284 9.91421 20.9142C9.32843 21.5 8.38562 21.5 6.5 21.5C4.61438 21.5 3.67157 21.5 3.08579 20.9142C2.5 20.3284 2.5 19.3856 2.5 17.5Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M13.5 6.5C13.5 4.61438 13.5 3.67157 14.0858 3.08579C14.6716 2.5 15.6144 2.5 17.5 2.5C19.3856 2.5 20.3284 2.5 20.9142 3.08579C21.5 3.67157 21.5 4.61438 21.5 6.5C21.5 8.38562 21.5 9.32843 20.9142 9.91421C20.3284 10.5 19.3856 10.5 17.5 10.5C15.6144 10.5 14.6716 10.5 14.0858 9.91421C13.5 9.32843 13.5 8.38562 13.5 6.5Z" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </button>
          </div>
        </div>
        <div class="relative ">
          <input type="text" placeholder="Search Projects" class="py-2 form-input ltr:pr-11 rtl:pl-11 peer" x-model="searchProject" @keyup="searchProjects" />
          <div class="absolute ltr:right-[11px] rtl:left-[11px] top-1/2 -translate-y-1/2 peer-focus:text-primary">
            <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
              <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="p-0 mt-5 overflow-hidden border-0 panel">
      <template x-if="displayType === 'list'">
        <div class="table-responsive">
          <table class="table-striped table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Phone</th>
                <th class="!text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <template x-for="project in filteredProjectsList" :key="project.id">
                <tr>
                  <td>
                    <div class="flex items-center w-max">
                      <div x-show="project.path" class="w-max">
                        <img :src="`/assets/images/${project.path}`" class="object-cover w-8 h-8 rounded-full ltr:mr-2 rtl:ml-2" alt="avatar" />
                      </div>
                      <div x-show="!project.path && project.name" class="grid w-8 h-8 text-sm font-semibold text-white rounded-full place-content-center ltr:mr-2 rtl:ml-2 bg-primary" x-text="project.name.charAt(0) + '' + project.name.charAt(project.name.indexOf(' ') + 1)">
                      </div>
                      <div x-show="!project.path && !project.name" class="p-2 border border-gray-300 rounded-full dark:border-gray-800 ltr:mr-2 rtl:ml-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5">
                          <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                          <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                        </svg>
                      </div>
                      <div x-text="project.name"></div>
                    </div>
                  </td>
                  <td x-text="project.email"></td>
                  <td x-text="project.location" class="whitespace-nowrap"></td>
                  <td x-text="project.phone" class="whitespace-nowrap"></td>
                  <td>
                    <div class="flex items-center justify-center gap-4">
                      <button type="button" class="btn btn-sm btn-outline-primary" @click="editProject(project)">Edit</button>
                      <button type="button" class="btn btn-sm btn-outline-danger" @click="deleteProject(project)">Delete</button>
                    </div>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>
        </div>
      </template>
    </div>
    <template x-if="displayType === 'grid'">
      <div class="grid w-full grid-cols-1 gap-6 2xl:grid-cols-4 xl:grid-cols-3 sm:grid-cols-2">
        <template x-for="project in filteredProjectsList" :key="project.id">
          <div class="bg-white dark:bg-[#1c232f] rounded-md overflow-hidden text-center shadow relative">
            <div class="bg-white/40 rounded-t-md bg-[url('/assets/images/notification-bg.png')] bg-center bg-cover p-6 pb-0">
              <template x-if="project.path">
                <img class="object-contain w-4/5 mx-auto max-h-40" :src="`/assets/images/${project.path}`" />
              </template>
            </div>
            <div class="relative px-6 pb-24 -mt-10">
              <div class="px-2 py-4 bg-white rounded-md shadow-md dark:bg-gray-900">
                <div class="text-xl" x-text="project.name"></div>
                <div class="text-white-dark" x-text="project.role"></div>
                <div class="flex flex-wrap items-center justify-between gap-3 mt-6">
                  <div class="flex-auto">
                    <div class="text-info" x-text="project.posts"></div>
                    <div>Posts</div>
                  </div>
                  <div class="flex-auto">
                    <div class="text-info" x-text="project.following"></div>
                    <div>Following</div>
                  </div>
                  <div class="flex-auto">
                    <div class="text-info" x-text="project.followers"></div>
                    <div>Followers</div>
                  </div>
                </div>
                <div class="mt-4">
                  <ul class="flex items-center justify-center space-x-4 rtl:space-x-reverse">
                    <li>
                      <a href="javascript:;" class="p-0 rounded-full btn btn-outline-primary h-7 w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" ="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;" class="p-0 rounded-full btn btn-outline-primary h-7 w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;" class="p-0 rounded-full btn btn-outline-primary h-7 w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                          </path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;" class="p-0 rounded-full btn btn-outline-primary h-7 w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                          <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="grid grid-cols-1 gap-4 mt-6 ltr:text-left rtl:text-right">
                <div class="flex items-center">
                  <div class="flex-none ltr:mr-2 rtl:ml-2">Email :</div>
                  <div class="truncate text-white-dark" x-text="project.email"></div>
                </div>
                <div class="flex items-center">
                  <div class="flex-none ltr:mr-2 rtl:ml-2">Phone :</div>
                  <div class="text-white-dark" x-text="project.phone"></div>
                </div>
                <div class="flex items-center">
                  <div class="flex-none ltr:mr-2 rtl:ml-2">Address :</div>
                  <div class="text-white-dark" x-text="project.location"></div>
                </div>
              </div>
            </div>
            <div class="absolute bottom-0 flex w-full gap-4 p-6 mt-6 ltr:left-0 rtl:right-0">
              <button type="button" class="w-1/2 btn btn-outline-primary" @click="editProject(project)">Edit</button>
              <button type="button" class="w-1/2 btn btn-outline-danger" @click="deleteProject(project)">Delete</button>
            </div>
          </div>
        </template>
      </div>
    </template>
  </div>
  <script>
   document.addEventListener("alpine:init", () => {
			Alpine.data("projects", () => ({
				defaultParams: {
					id: null,
					name: '',
					email: '',
					role: '',
					phone: '',
					location: ''
				},
				displayType: 'list',
				addProjectModal: false,
				params: {
					id: null,
					name: '',
					email: '',
					role: '',
					phone: '',
					location: ''
				},
				filteredProjectsList: [],
				searchProject: '',
				projectList: [
					{
						id: 1,
						path: 'profile-35.png',
						name: 'Alan Green',
						role: 'Web Developer',
						email: 'alan@mail.com',
						location: 'Boston, USA',
						phone: '+1 202 555 0197',
						posts: 25,
						followers: '5K',
						following: 500,
					},
					{
						id: 2,
						path: 'profile-35.png',
						name: 'Linda Nelson',
						role: 'Web Designer',
						email: 'linda@mail.com',
						location: 'Sydney, Australia',
						phone: '+1 202 555 0170',
						posts: 25,
						followers: '21.5K',
						following: 350,
					},
					{
						id: 3,
						path: 'profile-35.png',
						name: 'Lila Perry',
						role: 'UX/UI Designer',
						email: 'lila@mail.com',
						location: 'Miami, USA',
						phone: '+1 202 555 0105',
						posts: 20,
						followers: '21.5K',
						following: 350,
					},
					{
						id: 4,
						path: 'profile-35.png',
						name: 'Andy King',
						role: 'Project Lead',
						email: 'andy@mail.com',
						location: 'Tokyo, Japan',
						phone: '+1 202 555 0194',
						posts: 25,
						followers: '21.5K',
						following: 300,
					},
					{
						id: 5,
						path: 'profile-35.png',
						name: 'Jesse Cory',
						role: 'Web Developer',
						email: 'jesse@mail.com',
						location: 'Edinburgh, UK',
						phone: '+1 202 555 0161',
						posts: 30,
						followers: '20K',
						following: 350,
					},
					{
						id: 6,
						path: 'profile-35.png',
						name: 'Xavier',
						role: 'UX/UI Designer',
						email: 'xavier@mail.com',
						location: 'New York, USA',
						phone: '+1 202 555 0155',
						posts: 25,
						followers: '21.5K',
						following: 350,
					},
					{
						id: 7,
						path: 'profile-35.png',
						name: 'Susan',
						role: 'Project Manager',
						email: 'susan@mail.com',
						location: 'Miami, USA',
						phone: '+1 202 555 0118',
						posts: 40,
						followers: '21.5K',
						following: 350,
					},
					{
						id: 8,
						path: 'profile-35.png',
						name: 'Raci Lopez',
						role: 'Web Developer',
						email: 'traci@mail.com',
						location: 'Edinburgh, UK',
						phone: '+1 202 555 0135',
						posts: 25,
						followers: '21.5K',
						following: 350,
					},
					{
						id: 9,
						path: 'profile-35.png',
						name: 'Steven Mendoza',
						role: 'HR',
						email: 'sokol@verizon.net',
						location: 'Monrovia, US',
						phone: '+1 202 555 0100',
						posts: 40,
						followers: '21.8K',
						following: 300,
					},
					{
						id: 10,
						path: 'profile-35.png',
						name: 'James Cantrell',
						role: 'Web Developer',
						email: 'sravani@comcast.net',
						location: 'Michigan, US',
						phone: '+1 202 555 0134',
						posts: 100,
						followers: '28K',
						following: 520,
					},
					{
						id: 11,
						path: 'profile-35.png',
						name: 'Reginald Brown',
						role: 'Web Designer',
						email: 'drhyde@gmail.com',
						location: 'Entrimo, Spain',
						phone: '+1 202 555 0153',
						posts: 35,
						followers: '25K',
						following: 500,
					},
					{
						id: 12,
						path: 'profile-35.png',
						name: 'Stacey Smith',
						role: 'Chief technology officer',
						email: 'maikelnai@optonline.net',
						location: 'Lublin, Poland',
						phone: '+1 202 555 0115',
						posts: 21,
						followers: '5K',
						following: 200,
					},
				],
				init() {
					this.searchProjects();
				},
				searchProjects() {
					this.filteredProjectsList = this.projectList.filter((d) => d.name.toLowerCase().includes(this.searchProject.toLowerCase()));
				},
				editProject(project) {
					this.params = this.defaultParams;
					if (project) {
						this.params = JSON.parse(JSON.stringify(project));
					}
					this.addProjectModal = true;
				},
				saveProject() {
					if (!this.params.name) {
						this.showMessage('Name is required.', 'error');
						return true;
					}
					if (!this.params.email) {
						this.showMessage('Email is required.', 'error');
						return true;
					}
					if (!this.params.phone) {
						this.showMessage('Phone is required.', 'error');
						return true;
					}
					if (!this.params.role) {
						this.showMessage('Occupation is required.', 'error');
						return true;
					}
					if (this.params.id) {
						//update project
						let project = this.projectList.find((d) => d.id === this.params.id);
							project.name = this.params.name;
							project.email = this.params.email;
							project.role = this.params.role;
							project.phone = this.params.phone;
							project.location = this.params.location;
					} else {
						//add project
						let maxProjectId = this.projectList.length ? this.projectList.reduce((max, character) => (character.id > max ? character.id : max), this.projectList[0].id) : 0;
						let project = {
							id: maxProjectId + 1,
							path: 'profile-35.png',
							name: this.params.name,
							email: this.params.email,
							role: this.params.role,
							phone: this.params.phone,
							location: this.params.location,
							posts: 20,
							followers: '5K',
							following: 500,
						};
						this.projectList.splice(0, 0, project);
						this.searchProjects();
					}
						this.showMessage('Project has been saved successfully.');
						this.addProjectModal = false;
				},
				deleteProject(project) {
					this.projectList = this.projectList.filter((d) => d.id != project.id);
					this.searchProjects();
					this.showMessage('Project has been deleted successfully.');
				},
				setDisplayType(type) {
					this.displayType = type;
				},
				showMessage(msg = '', type = 'success') {
					const toast = window.Swal.mixin({
						toast: true,
						position: 'top',
						showConfirmButton: false,
						timer: 3000,
					});
					toast.fire({
						icon: type,
						title: msg,
						padding: '10px 20px',
					});
				},
			}));
		});
  </script>
</x-layout.default>
