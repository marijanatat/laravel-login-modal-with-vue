<login inline-template>
<modal name="login" height="auto">
    <form action="" class="p-10" @submit.prevent="login">
        <div >
            <label for="email" class="block uppercase tracking wide mb-2 font-bold text-xs text-grey-darker"  >Email</label>
            <input type="email" name="email" id="email"
             placeholder="johndoe@gmail.com"
             required
             autocomplete="email"
             v-model="form.email"
              class="w-full p-2 border">
        </div>
        <div>

            <label for="password" class="block uppercase tracking wide mb-2 font-bold text-xs text-grey-darker">Password</label>
            <input type="password" class="w-full p-2 border"
             name="password" 
             id="email"
             autocomplete="current-password" 
             v-model="form.password"
             required>
        </div>

        <div class="flex -mx-4">
            <button class=" flex-1 border bg-green-300 p-2 font-bold text-md mx-4 my-4 rounded shadow-lg" 
            type="submit">
               Log in
            </button>
            <button class="flex-1 border bg-red-300 p-2 font-bold text-md mx-4 my-4 rounded shadow-lg" 
            type="submit" @click="$modal.hide('login')">
                Cancel
             </button>           
        </div>

        <div v-if="feedback" class="mt-6">
            <span class="text-xsm font-bold text-red-600" v-text="feedback">

            </span>

        </div>
    </form>
</modal>
</login>