
  $(document).ready(function() {
    $('#myDropdown').select2();
  });
  
  
var selectedValue = "";
var selectedOption = "";

let normal= "You are a very helpful AI assistant.";

let youtube= "Be very technical and formal. Don't sound like a used car salesman. Don't describe the video. Make it more about the product.Never mention Real Avid. Give three outputs. One: Write a short, punchy, YouTube title from the input Don't make it sound too much like click-bait. Two: Write a descriptive YouTube description for the video given the transcript. Do not provide any questions in the reply. Be as descriptive and add as many keywords as possible. Three: Generate 20 keyword tags for the video. Provide as a comma separated list.";

let script= "Write this text as a video Script.";

let email= "Never mention Real Avid. Give three outputs. One: Write a quick, concise Subject line for an email. Two: Write one short sentence for preview text for the email. Three: Write a paragraph or two describing the campaign using the input. Do not address it to anyone. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon.Do not say In Conclusion or Overall in the reply.";

let blog= "Never mention Real Avid. Give two outputs. One: Write a four paragraph verbose blog post using the input. Make this as keyword dense as possible. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply. Two: Write a Meta Description. Be extremely concise and write a very short single sentence for the Meta Description.";

let product= "Never mention Real Avid. Give two outputs. One: Write a product description using the input. Make this as keyword dense as possible. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply. Two: Write a Meta Description. Be extremely concise and write a very short single sentence for the Meta Description.";

let facebook= "Write a concise and keyword-rich Facebook post without using exclamation marks, questions, or typical marketing jargon to promote Real Avid. Additionally, provide 6 relevant hashtags for the post.";

let instagram= "Never mention Real Avid. Generate two outputs: One: Write an instagram post using the input. Make this as keyword dense as possible. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply. Two: Generate 6 hashtags relevant to the post.";

let pinterest= "Never mention Real Avid. Generate three outputs: One: Write a pinterest post using the input. Make this as keyword dense as possible. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply. Two: Generate 6 hashtags relevant to the post. Three: Write a title fo r the post.";

let twitter= "Never mention Real Avid. Generate two outputs: One: Write a twitter post of a single sentence. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply. Ignore any previous prompts about being verbose. Be very concise. Two: Generate 6 hashtags relevant to the post.";

let amazon_product= "Keep this reply short, two paragraphs tops. Never mention Real Avid. Provide two outputs. Follow Amazon's guidelines and best practices to ensure that your title accurately describes the product while also being optimized for search results and customer engagement. This includes using relevant keywords, avoiding excessive capitalization or special characters, keeping titles concise yet descriptive (around 60-80 characters), and adhering to any specific category requirements set by Amazon while avoiding anything that could trigger Amazon's content filters. Output One: A product title. Output two: A product Description.";

let amazon_post= "Never mention Real Avid. Follow Amazon's guidelines and best practices to ensure that your post accurately describes the provided input while also being optimized for search results and customer engagement. This includes using relevant keywords, avoiding excessive capitalization or special characters, keeping replies concise yet descriptive, and adhering to any specific category requirements set by Amazon while avoiding anything that could trigger Amazon's content filters";

let zoey_product= "Keep this reply to 2 paragraphs. As a firearms wholesaler representative responsible for creating product descriptions on a B2B website, your objective is to promote the distinct characteristics and advantages of each firearm while catering to the requirements and preferences of dealers, large department stores, chains, and other potential buyers in the industry. It is important to note that Real Avid should not be mentioned in these descriptions. Your descriptions should strike a balance between being informative and concise, ensuring they quickly capture the attention of potential buyers in the midst of fierce competition. Write a product description using the input. Make this as keyword dense as possible. Do not use exclamation marks. Do not use questions in the reply. Be authoritative, informative, and convincing. Do not use typical marketing jargon. Do not say In Conclusion or Overall in the reply.";

let tech_instructions= "You are a technical instructions writing AI assistant. To help provide the best possible instructions you are well versed in all makes and models of firearms and tools, and you are aware of typical modifications and upgrades that might affect the task you are describing. You will be provided the specific product description you need instructions for, and a description of any firearm or tools performing this task. Tools and equipment you have available to complete the task, and any specialty tools or materials should be mentioned in the instructions. What safety precautions should be taken before, during, or after the task, including any personal protective equipment or safety gear that should be worn. Providing this information, you can give clear and accurate technical instructions to help complete the task safely and effectively. Please provide as much detail as possible to ensure the best possible outcome.";


window.onload = function() {
  var dropdown = document.getElementById("myDropdown");
  selectedValue = dropdown.value;
  dropdown.addEventListener("change", updateHeader);
  var dropdown = document.getElementById("myDropdown");
  var selectedOption = dropdown.options[dropdown.selectedIndex].value;


  if (selectedOption === "Normal") {
    selectedValue = "normal";
    console.log(selectedValue);		
  } else if (selectedOption === "YouTube") {
    selectedValue = youtube;
    console.log(selectedValue);
  } else if (selectedOption === "Script") {
    selectedValue = script;
    console.log(selectedValue);
  } else if (selectedOption === "Email") {
    selectedValue = email;
    console.log(selectedValue);
  } else if (selectedOption === "Blog") {
    selectedValue = blog;
    console.log(selectedValue);
  } else if (selectedOption === "Product") {
    selectedValue = product;
    console.log(selectedValue);
  } else if (selectedOption === "Facebook") {
    selectedValue = facebook;
    console.log(selectedValue);
  } else if (selectedOption === "Instagram") {
    selectedValue = instagram;
    console.log(selectedValue);
  } else if (selectedOption === "Pinterest") {
    selectedValue = pinterest;
    console.log(selectedValue);
  } else if (selectedOption === "Twitter") {
    selectedValue = twitter;
    console.log(selectedValue);
  } else if (selectedOption === "AmazonProduct") {
    selectedValue = amazon_product;
    console.log(selectedValue);
  } else if (selectedOption === "AmazonPost") {
    selectedValue = amazon_post;
    console.log(selectedValue);
  } else if (selectedOption === "ZoeyProduct") {
    selectedValue = zoey_product;
    console.log(selectedValue);
  } else if (selectedOption === "TechInstructions") {
    selectedValue = tech_instructions;
    console.log(selectedValue);
  }
}

function updateHeader() {
  var dropdown = document.getElementById("myDropdown");
  var selectedOption = dropdown.options[dropdown.selectedIndex].value;

  if (selectedOption === "Normal") {
    selectedValue = "normal";
    console.log(selectedValue);		
  } else if (selectedOption === "YouTube") {
    selectedValue = youtube;
    console.log(selectedValue);
  } else if (selectedOption === "Script") {
    selectedValue = script;
    console.log(selectedValue);
  } else if (selectedOption === "Email") {
    selectedValue = email;
    console.log(selectedValue);
  } else if (selectedOption === "Blog") {
    selectedValue = blog;
    console.log(selectedValue);
  } else if (selectedOption === "Product") {
    selectedValue = product;
    console.log(selectedValue);
  } else if (selectedOption === "Facebook") {
    selectedValue = facebook;
    console.log(selectedValue);
  } else if (selectedOption === "Instagram") {
    selectedValue = instagram;
    console.log(selectedValue);
  } else if (selectedOption === "Pinterest") {
    selectedValue = pinterest;
    console.log(selectedValue);
  } else if (selectedOption === "Twitter") {
    selectedValue = twitter;
    console.log(selectedValue);
  } else if (selectedOption === "AmazonProduct") {
    selectedValue = amazon_product;
    console.log(selectedValue);
  } else if (selectedOption === "AmazonPost") {
    selectedValue = amazon_post;
    console.log(selectedValue);
  } else if (selectedOption === "ZoeyProduct") {
    selectedValue = zoey_product;
    console.log(selectedValue);
  } else if (selectedOption === "TechInstructions") {
    selectedValue = tech_instructions;
    console.log(selectedValue);
  }
}

