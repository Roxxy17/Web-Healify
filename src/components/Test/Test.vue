<template>
  <div class="container mt-3 m-auto p-3 rounded-lg bg-[#D9D9D9]">
    <div class="container shadow-md mt-5 m-auto p-10 bg-[#FBEEAC] rounded-lg">
      <div class="">
        <img
          class="float-left"
          src="D:\My Project\Healify\src\assets\Error.png"
          alt=""
          width="25"
          height="25"
        />
        Petunjuk Berilah: Pilih opsi pada pernyataan yang sesuai dengan keadaan
        pada diri anda
      </div>
    </div>
    <div v-for="(question, index) in questions" :key="index" class="container shadow-md mt-5 m-auto p-10 bg-[#C6E3FF] rounded-lg">
      <div class="float-left">{{ question.text }}</div>
      <div class="text-right">
        <input type="radio" :name="'question' + index" value="y" v-model="responses[index]" /> ya
        <input type="radio" :name="'question' + index" value="t" v-model="responses[index]" /> tidak
      </div>
    </div>
  </div>
  <div class="mt-5 mb-5 text-right">
    <button
      class="mr-16 text-[#1D5D9B] font-semibold inline-block px-7 py-2 bg-[#F4D160] shadow-lg rounded-xl"
      @click="submitResponses"
    >
      Kirim
    </button>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      responses: Array(18).fill(null), // Adjust the length based on the number of questions
      questions: [
        { text: "Sekali-sekali saya berfikir tentang hal yang buruk untuk diutarakan" },
        { text: "Kadang-kadang saya ingin mengumpat atau mencaci maki" },
        { text: "Saya tidak selalu mengatakan yang benar" },
        { text: "Saya tidak membaca setiap tajuk rencana surat kabar harian" },
        { text: "Saya kadang-kadang marah" },
        { text: "Apa yang dapat saya kerjakan han ını kadang-kadang saya tunda sampai besok" },
        { text: "Bila saya sedang tidak enak badan, kadang-kadang saya mudah tersinggung" },
        { text: "Sopan santun saya di rumah tidak sebaik jika saya bersama orang lain" },
        { text: "Bila saya yakin tidak seorangpun yang melihatnya, mungkin sekali saya akan menyelundup nonton tanpa karcis" },
        { text: "Saya lebih senang menang daripada kalah dalam suatu pertandingan" },
        { text: "Saya mengenal orang-orang penting karena dengan demikian saya merasa menjadi orang penting juga" },
        { text: "Saya tidak selalu menyukai setiap orang yang saya kenal" },
        { text: "Saya lebih senang menang daripada kalah dalam suatu pertandingan" },
        { text: "Kadang-kadang saya mempergunjingkan orang lain (gosip)" },
        { text: "Saya kadang-kadang memilih orang yang tidak saya kenal dalam suatu pemilihan" },
        { text: "Sekali-sekali saya tertawa mendengar lelucon porno" },
        // Add more questions here if necessary
      ],
    };
  },
  methods: {
    submitResponses() {
      const yesCount = this.responses.filter(response => response === 'y').length;
      if (yesCount > 5) {
        this.$router.push('/Hasilbaik');
      } else {
        this.$router.push('/Hasiljelek');
      }
    },
  },
};
</script>
