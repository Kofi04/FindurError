<script>
const { Configuration, OpenAIApi } = require("openai")

const configuration = new Configuration({
  apiKey: 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, 
})
const openai = new OpenAIApi

const completion = await openai.createChatCompletion({
  model: "gpt-3.5-turbo",
  messages: [{ role: "user", content: "il faut que tu classifie les patients selon la gravité de leur maux" }],
})

console.log(completion.data.choices[0].message)
</script>