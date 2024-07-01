async function query(data) {
  const response = await fetch(
    "https://api.stack-ai.com/inference/v0/run/7cb77ac9-614c-4db2-b33a-18ebb93a3d7f/667ef0498b8b71de34fb1f95",
    {
      headers: {
        Authorization: "Bearer XXXXXXXXXXXXX",
        "Content-Type": "application/json",
      },
      method: "POST",
      body: JSON.stringify(data),
    }
  );
  const result = await response.json();
  return result;
}

query({ "in-0": `quien sos`, user_id: `<USER or Conversation ID>` }).then(
  (response) => {
    console.log(JSON.stringify(response));
  }
);
